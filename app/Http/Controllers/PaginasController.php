<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function canciones($id = null) {
        $songs = [['nombre' => 'Pillowtalk', 'artista' => 'Zayn Malik'],
                ['nombre' => 'Daylight','artista' => 'Harry Styles'],
                ['nombre' => 'Defenceless','artista' => 'Louis Tomlinson']];

        if(!is_null($id) && $id < sizeof($songs)) {
            $song = $songs[$id];
        } else {
            $song = null;
        }

        return view('canciones', compact('songs', 'song'));
    }

    public function contacto() {
        return view('contacto');
    }

    public function postContacto(Request $request) {
        // dd($request->all());

        // Validar informacion
        $request->validate([
            'nombre' => ['required', 'string', 'max:255', 'min:5'],
            'codigo' => ['required', 'integer', 'max:100']
        ]);

        dd('Validacion correcta');

        // Guardar a DB

        // Redirecciones a otra URL
    }
}
