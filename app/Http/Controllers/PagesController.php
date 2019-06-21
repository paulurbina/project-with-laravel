<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index() {
        $notas = App\Nota::paginate(5);
        return view('plantilla', compact('notas'));
    }

    public function detalle ($id) {
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request) {
        $notaNueva = new App\Nota;

        $request->validate([
            'nombre'=>'required',
            'description'=>'required'
        ]);

        $notaNueva->nombre = $request->nombre;
        $notaNueva->description = $request->description;

        $notaNueva->save();
        return back()->with('mensaje', 'Nota creada con exito!');
    }

    public function editar ($id) {

        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
     
    }

    public function update (Request $request, $id) {
        $notaUpdate = App\Nota::findOrFail($id);
        
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->description = $request->description;
        
        #validation
        $request->validate([
            'nombre'=>'required',
            'description'=>'required'
        ]);

        $notaUpdate->save();
        return  back()->with('mensajeUpdate', 'Nota editada con exito!');

    }

    public function eliminar ($id) {
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje', 'Nota eliminada con exito!');
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