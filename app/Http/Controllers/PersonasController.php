<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
   
    public function index()
    {
        //
        $datos = Personas::orderBy('nombres','desc')->paginate(3);
        return view('welcome', compact('datos'));
    }

    
    public function create()
    {
        //
        return view('agregar');
    }

    
    public function store(Request $request)
    {
        //
        //dd($_POST);
        //print_r($_POST);
        $personas = new personas();
        $personas->nombres = $request->post('nombres');
        $personas->apellidos = $request->post('apellidos');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->back()->with('status','Persona agregada con Exito');
    }

   
    public function show($id)
    {
        //
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
        
    }

    
    public function edit($id)
    {
        //
        $personas = Personas::find($id);
        return view('edit', compact('personas'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $personas = Personas::find($id);
        $personas->nombres = $request->post('nombres');
        $personas->apellidos = $request->post('apellidos');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route('personas.index')->with('status', 'Persona Editada con Exito!');
    }

    
    public function destroy($id)
    {
        //
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route('personas.index')->with('status', 'Persona Eliminada con Exito!');
    }
}
