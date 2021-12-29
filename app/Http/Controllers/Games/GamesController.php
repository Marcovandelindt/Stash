<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;

class GamesController extends Controller
{
    /**
     * Index action
     */
    public function index()
    {
        $data = [
            'title' => 'Games',
        ];

        return view('games.index')->with($data);
    }
}
