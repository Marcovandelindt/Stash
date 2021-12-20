<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Index action
     */
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];

        return view('home.index')->with($data);
    }
}
