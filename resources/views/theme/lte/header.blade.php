<header class="main-header">
  <!-- Logo -->
  <a href="/" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">Sistema<b>PQR</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
            <span class="hidden-xs">Hola, {{session()->get('nombre_usuario') ?? 'Aun no inicias sesion'}}</span>
          </a>
          <ul class="dropdown-menu">
          
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                  @if(session()->get("roles") && count(session()->get("roles")) > 1)
                  <div class="col-xs-6 text-center">
                      <a href="#" class="cambiar-rol">Cambiar Rol</a>
                  </div>
                  @endif
              </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{route('login')}}" class="btn btn-danger btn-flat">Login</a>
              </div>
              <div class="pull-right">
                <a href="{{route('logout')}}" class="btn btn-info btn-flat">Salir</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
