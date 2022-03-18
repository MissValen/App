<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Creamos un array para poder manipular informacion de la tabla cursos
        //a su vez el array actuara como un objeto

        $cursito = curso::all();
        /*el metodo compact pide un parametro el cual sera nuestro array llamado
        cursito y va acompañado la vista que estamos llamando*/
        return view('Cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // con el metodo all() veo toda la informcaion
        //return $request->all();
        //Obtuvimos el dato de lo que el usuaro envia por el input cuyo name es "nombre"
        //return $request->input('nombre');
        // creamos una nueva instancia del modelo

        $cursito = new curso();
        //esto me permitira manipular la table cursos

        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        if ($request->hasfile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public');
        }

        $cursito->save();
        return 'WoW lograste guardar';
    }

    /**
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //se creo un array con la informacion del registro del id
        $cursito = curso::find($id);
        //se asoscia el array al view usando compact
        return view('Cursos.show', compact('$cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
