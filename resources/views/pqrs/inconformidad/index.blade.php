@extends("theme.$theme.layout")
@section('titulo')
  Inconformidad
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Inconformidades</h3>
                <a href="{{route('crear_inconformidad')}}" class="btn btn-success btn-sm pull-right">Crear Inconformidad</a>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Pqrs</th>
                            <th>Motivo</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th class="width100"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($datosInconformidad as $inconformidad)
                            <tr>
                                <td>{{$inconformidad->created_at}}</td>
                                <td>{{$inconformidad->usuario->nombre}}</td>
                                <td>{{$inconformidad->pqrs->nombre}}</td>
                                <td>{{$inconformidad->motivo}}</td>
                                <td>{{$inconformidad->descripcion}}</td> <td>{{$inconformidad->estado}}</td>
                                
                                <td>
                                     <a href="{{route('responder_pqrs')}}" cclass="btn-accion-tabla tooltipsC" title="Respuesta de esta pqrs">
                                     <i class="fa fa-envelope-o"></i>
                                     <span class="label label-success">4</span>
                                    </a>
                                    <a href="" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="fa fa-times-circle text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
                       