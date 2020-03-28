<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema PQR | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">Sistema PQR </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Registrar Cuenta</p>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="alert-text">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
            <form action="{{route('registrar_usuario')}}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group has-feedback">
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus placeholder="Nombre">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">

                   <input id="identificacion" type="text" class="form-control" name="identificacion" value="{{ old('identificacion') }}" required autocomplete="identificacion" placeholder="Identificacion">

                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                </div>

                <div class="form-group has-feedback" > 

                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" placeholder="Telefono">

                </div>

                <div class="form-group has-feedback" > 

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="Correo electronico" placeholder="Correo electronico">

                </div>

                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Contraseña">

                </div>

                <div class="form-group has-feedback"> 

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">

                </div>

                <div class="row">
                    <div class="col-xs-8"></div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Crear Cuenta</button>
                         <a class="btn btn-primary btn-block btn-flat" href="/">Volver</a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
</body>

</html>
