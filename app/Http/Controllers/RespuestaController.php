<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inconformidad;
use App\Models\Respuesta;
use App\Models\Seguriad\Usuario;


//***Autor:***Yefry Montero**//
//***Created_At:***22/03/2020***//
//***Update_At:***22/03/2020***//

class RespuestaController extends Controller
{
    
     /**
     * Guarda una respuesta de una inconformidad
     */
    public function store(Request $request, $id)
    { 
        
        $Relacioninconfor = Respuesta::findOrFail($id);
        $Relacioninconfor->create([
         'usuario_id' => auth()->user()->id,
         'inconformidad_id' => $Relacioninconfor->id,
         'descripcion' => $request->descripcion
        ]); 
        return redirect()->back();
    }

    /**
     * Muestra las respuestas relacionadas con la inconformidad.
     */
    public function show($id)
    {
        $nombreUsuario = auth()->user()->nombre;
        $inconformidad = Inconformidad::with('usuario')->findOrFail($id);
        $respuestas = Respuesta::with('usuario')->where('inconformidad_id','=',$id)->get();
        return view('pqrs.respuesta.index', compact('inconformidad','respuestas','nombreUsuario'));
        
    }
}
