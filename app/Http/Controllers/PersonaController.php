<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'correo_personal' => 'nullable|email',
            'correo_corporativo' => 'nullable|email',
            'direccion' => 'required|string',
            'profesion' => 'required|string',
            'area' => 'required|in:comunicacion,arte,dpcc,ccss,cyt,matematica,fisica,religion',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona creada con éxito.');
    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'correo_personal' => 'nullable|email',
            'correo_corporativo' => 'nullable|email',
            'direccion' => 'required|string',
            'profesion' => 'required|string',
            'area' => 'required|in:comunicacion,arte,dpcc,ccss,cyt,matematica,fisica,religion',
        ]);

        $persona->update($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona actualizada con éxito.');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada con éxito.');
    }
}
