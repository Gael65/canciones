<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SongsController;

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

Route::get('canciones', [SongsController::class, 'songs']);

Route::get('canciones/{id?}', function ($id = null) {
    // $canciones = [];
    // $canciones = ['cancion' => 'Daylight', 'artista' => 'Harry Styles'];
    // $canciones = ['cancion' => 'Defenceless', 'artista' => 'Louis Tomlinson'];

    $canciones = [
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

    $cancion = $canciones[$id];

    return view('detalles-cancion', compact('cancion'));
});

// Route::get('/canciones', function () {

//     $songs = [
//         [
//             'cancion' => 'Woman',
//             'artista' => 'John Lennon'
//         ],
//         [
//             'cancion' => 'Daylight',
//             'artista' => 'Harry Styles'
//         ],
//         [
//             'cancion' => 'Defenceless',
//             'artista' => 'Louis Tomlinson'
//         ]
//     ];

//     return view('/canciones', ['songs' => $songs]);
// });
