<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('canciones/{id?}', function ($id = null) {

    $songs = [['nombre' => 'Woman', 'artista' => 'John Lennon'],
                ['nombre' => 'Daylight','artista' => 'Harry Styles'],
                ['nombre' => 'Defenceless','artista' => 'Louis Tomlinson']];

    if(!is_null($id)) {
        $song = $songs[$id];
    }
    else {
        $song = null;
    }
    
    return view('canciones', compact('songs', 'song'));
});
