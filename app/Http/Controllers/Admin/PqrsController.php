<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\pqrs;

class PqrsController extends Controller
{
     public function index()
    {
        $datosPqrs = Pqrs::orderBy('id')->get();
        return view('admin.pqrs.index', compact('datosPqrs'));
    }

    public function crear()
    {
     return view('admin.pqrs.crear');  
    }


    public function guardar(Request $respuesta_form)
    {
   dd($respuesta_form)->all();
        $usuario = Pqrs::create($respuesta_form->all());
        return redirect('admin/pqrs')->with('mensaje', 'PQRS creado con exito');
    }
}
