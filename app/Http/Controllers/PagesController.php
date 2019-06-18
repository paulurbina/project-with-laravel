<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
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