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
        
        return view('inicio'
       );
        
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
      
        $persona = new Persona(array(
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'genero' => $request->get('genero'),
            'email' => $request->get('email'),
            'fecha_nacimiento' => $request->get('fecha_nacimiento')
        ));

        $persona->save();
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
        $personas = Persona::all();
        return view('inicio', compact(
            'nombre',
            'apellido',
            'genero',
            'email',
            'fecha_nacimiento',
   ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actualizar = App\Persona::firstOrfail($id);
        return view('editar' ,compact('nombre','apellido','genero','email','fecha_nacimiento')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
