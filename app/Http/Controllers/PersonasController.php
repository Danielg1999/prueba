<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Persona;
class PersonasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // Se listan todas las personas
       $personas = Persona::all();
       return view('index', compact('personas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $usuario = new Persona;

      $usuario->nombre = $request->nombre;
      $usuario->apellido = $request->apellido;
      $usuario->genero = $request->genero;
      $usuario->email = $request->email;
      $usuario->fecha_nacimiento = $request->fecha_nacimiento;

      $usuario->save();
      return view('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $personas = Persona::find($id);
       return view('editar',compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Persona::findOrFail($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        personas::findOrFail($id)->delete();
        //personas::destroy($id);
        return back();
    }
}
