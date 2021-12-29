<?php

namespace App\Http\Controllers\Games;

use App\Models\Game;
use App\Models\GameActivity;
use Goutte\Client as GoutteClient;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ScrapePlaystationDataController extends Controller
{
    /**
     * Scrape the playstation data
     */
    public function scrape()
    {
        $overviewUrl = 'https://ps-timetracker.com/profile/Marchoofd/official_playtimes';

        $goutteClient = new GoutteClient();

        # Get overview Data
        $crawler = $goutteClient->request('GET', $overviewUrl);

        $crawler->filter('.table-responsive tbody tr')->each(function($node, $count) {
            $childNodes = json_encode($node->filter('td')->each(function ($nestedNode) {
                return $nestedNode->text();
            }));

            $gameData = json_decode($childNodes);
            $gameName = $gameData[1];

            if (!empty($gameName)) {
                if (!Game::where('name', $gameName)->first()) {
                    $game = new Game();
                } else {
                    $game = Game::where('name', $gameName)->first();
                }

                $game->name         = $gameData[1];
                $game->user_id      = Auth::user()->id;
                $game->platform     = $gameData[2];
                $game->hours_played = $gameData[3];
                $game->first_played = $gameData[5];
                $game->last_played  = $gameData[6];

                $game->save();
            }
        });

        # Get activity data
        $profileUrl = 'https://ps-timetracker.com/profile/Marchoofd/';

        $activityCrawler = $goutteClient->request('GET', $profileUrl);

        $activityCrawler->filter('.table-responsive tbody tr')->each(function($node, $count) {
            $childNodes = json_encode($node->filter('td')->each(function ($nestedNode) {
                return $nestedNode->text();
            }));


            $activityData = json_decode($childNodes);
            $activityGameName     = $activityData[2];

            if (!Game::where('name', $activityGameName)->first()) {
                $newGame = new Game();
                $newGame->user_id = Auth::user()->id;
                $newGame->name = $activityGameName;
                $newGame->platform = $activityData[3];
                $newGame->hours_played = $activityData[4];
                $newGame->first_played = $activityData[7];
                $newGame->last_played  = $activityData[7];

                $newGame->save();
            }

            $activityGame = Game::where('name', $activityGameName)->first();


            if (!empty($game)) {
                if (!GameActivity::where('game_id', $activityGame->id)->first()) {
                    $gameActivity = new GameActivity;
                    $gameActivity->game_id = $activityGame->id;
                    $gameActivity->played_time = $activityData[4];

                    $gameActivity->save();
                }
            }
        });
    }
}
