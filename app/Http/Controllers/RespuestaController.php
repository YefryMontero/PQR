<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inconformidad;
use App\Models\Respuesta;
use App\Models\Seguriad\Usuario;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       
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
    public function store(Request $request, $id)
    { 
        $inconformidad = Respuesta::findOrFail($id);
        $inconformidad->create([
         'usuario_id' => auth()->user()->id,
         'inconformidad_id' => $inconformidad->id, 
         'descripcion' => $request->descripcion
        ]); 
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nombreUsuario = auth()->user()->nombre;
        //dd($usuario);
        $inconformidad = Inconformidad::with('usuario')->findOrFail($id);
        $respuestas = Respuesta::with('usuario')->where('inconformidad_id','=',$id)->get();
        //dd($inconformidad);
        return view('pqrs.respuesta.index', compact('inconformidad','respuestas','nombreUsuario'));
        
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
