<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareasController extends Controller
{
    public function inicio(){
        $tareas = Tarea::all();
        return view('inicio', compact('tareas'));
    }
    public function agregar(){
        return view('agregar');
    }
    public function guardar(Request $request){
        $request->validate([
            'nombre' => 'required|max:255',
        ]);
        $tarea = new Tarea();
        $tarea->nombre = $request->nombre;

        $tarea->save();
        return redirect()->route('inicio')->with('success', 'Tarea agregada correctamente');
    }
    public function eliminar($id){
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect()->route('inicio')->with('success', 'Tarea eliminada correctamente');
    }

}
