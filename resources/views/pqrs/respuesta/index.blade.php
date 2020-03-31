@extends("theme.$theme.layout")
@section('titulo')
  Respuesta
@endsection
  
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{$inconformidad->motivo}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">{{$inconformidad->usuario->nombre}}</span>
                        <span class="direct-chat-timestamp pull-right">{{$inconformidad->created_at}}</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        {{$inconformidad->descripcion}}
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    @foreach ($respuestas as $respuesta)
                       
                       @if ($nombreUsuario == $respuesta->usuario->nombre)
                        @include('pqrs.respuesta.respuestabelarcazar')
                                @else
                            
                             @include('pqrs.respuesta.usuarioinconforme')
                    @endif
                    @endforeach
                    
                        
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="{{route('guardar_respuesta', $inconformidad)}}" method="post">
                    <div class="input-group">
                       @csrf
                      <input type="text" name="descripcion" id="descripcion" placeholder="Escribe Un Mensaje" class="form-control" autocomplete="off" required/>
                      <span class="input-group-btn">
                             <button type="submit" class="btn btn-primary btn-flat">Enviar</button>
                          </span>
                          <span> </span>
                          <span action=""  class="input-group-btn">
                            <a class="btn btn-info btn-flat">Fin Inconformidad</a>
                          </span>
                    </div>
                    
                      
                    
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->
            @endsection
