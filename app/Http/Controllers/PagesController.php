<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index() {

        $notas = App\Nota::all();

        return view('welcome', compact('notas'));
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