<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function songs()
    {
        $songs = [
            [
                'cancion' => 'Woman',
                'artista' => 'John Lennon'
            ],
            [
                'cancion' => 'Daylight',
                'artista' => 'Harry Styles'
            ],
            [
                'cancion' => 'Defenceless',
                'artista' => 'Louis Tomlinson'
            ]
        ];

        return view('canciones', ['songs' => $songs]);
    }
}
