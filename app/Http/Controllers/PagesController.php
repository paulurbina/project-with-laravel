<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index() {

        $notas = App\Nota::all();

        return view('plantilla', compact('notas'));
    }

    public function detalle ($id) {
        $nota = App\Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));

    }

    public function fotos() {
        return view('fotos');
    }
    public function blog() {
        return view('blog');
    }
    public function about($nombre = null) {
        $equipo = [ 'tatiana', 'jimena', 'kevin' ];

        return view('about', compact('equipo', 'nombre'));
    }
}