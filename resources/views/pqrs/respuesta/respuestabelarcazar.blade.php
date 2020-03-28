<div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">{{$respuesta->usuario->nombre}}</span>
                        <span class="direct-chat-timestamp pull-left">{{$respuesta->created_at}}</span>
                      </div>
                      <!-- /.direct-chat-info -->
                    
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        {{$respuesta->descripcion}}
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    