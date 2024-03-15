<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\todo;

class todosController extends Controller{

    public function store(Request $request){
        $request -> validate([
            'Nombre' => 'required│min:3'
        ]);

        $todo = new Todo;
        $todo -> Nombre = $request->Nombre;
        $todo -> save();

        return redirect() -> route('todos') -> with('success', 'Tarea Creada Correctamente');
    }
}
