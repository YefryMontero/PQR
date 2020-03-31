<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\inconformidad;
use App\Models\Admin\Pqrs;
use App\Models\Seguridad\Usuario;

//***Autor:***Yefry Montero**//
//***Created_At:***22/03/2020***//
//***Update_At:***31/03/2020***//

class InconformidadController extends Controller
{
    /**
     * Muestra una lista de las inconformidades 
     **/ 
    public function index()
    {
        
        $rol = auth()->user()->roles()->get(); 
        if($rol[0]['nombre'] == 'Cliente')
        {
          $identificacionUsuario = auth()->user()->id;
      $datosInconformidad = inconformidad::with('Usuario', 'Pqrs')->orderBy('created_at')->where('usuario_id','=',$identificacionUsuario)->get();
        }
        
      else{
        $datosInconformidad = inconformidad::with('Usuario', 'Pqrs')->orderBy('created_at')->get();
    }

        

       return view('pqrs.inconformidad.index',compact('datosInconformidad'));
    }

     /**
     * Muestra una formulario para crear una nueva inconformidad 
     **/ 
    public function crear()
    {    
        $datosPqrs = Pqrs::orderBy('id')->pluck('nombre', 'id')->toArray();
       // dd($datosPqrs);
         return view('pqrs.inconformidad.crear', compact('datosPqrs'));
    }

    /**
     * Guarda la inconformidad creada en la base de datos.
     */
    public function guardar(Request $respuesta_form)
    {   
        //dd($respuesta_form->motivo);
        $pqrs = Pqrs::findOrFail($respuesta_form->pqrs_id);
        $pqrs->inconfor()->create([
            'motivo' => $respuesta_form->motivo,
            'descripcion' => $respuesta_form->descripcion,
            'usuario_id' => auth()->user()->id
        ]);
        return redirect('pqrs/inconformidad')->with('mensaje', 'Su inconformidad se a creado con exito');
    }
}
