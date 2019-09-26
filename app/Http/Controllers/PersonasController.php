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
      $request->validate([
          'nombre' => 'required',
          'apellido' => 'required',
          'genero' => 'required',
          'email' => 'required',
          'fecha_nacimiento' => 'required',
      ]);
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
        $usuarios = Persona::all();
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
    public function update(Request $request, $id, Personas $personas)
    {
        $update = App\Persona::firstOrfail($id);
        $update->nombre = $request->nombre;
        $update->apellido = $request->apellido;
        $update->genero = $request->genero;
        $update->email = $request->email;
        $update->fecha_nacimiento = $request->fecha_nacimiento;
        $update->save();
        return view('inicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = App\Persona::firstOrfail($id);
        $eliminar->delete();
        return view('inicio');
    }
}
