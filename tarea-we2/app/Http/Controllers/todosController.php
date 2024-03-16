<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|min:3',
            'Telefono' => 'required|min:3',
            'Email' => 'required|email|min:3',
            'Mensaje' => 'required|min:3'
        ]);

        $todo = new Todo;
        $todo->Nombre = $request->Nombre;
        $todo->Telefono = $request->Telefono;
        $todo->Email = $request->Email;
        $todo->Mensaje = $request->Mensaje;
        $todo->save();

        return redirect() ->route('Todos')-> with('success','Tarea creada correctamente');

    }
}

