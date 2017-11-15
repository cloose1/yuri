<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BitID</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('usuario/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('usuario/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('usuario/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('usuario/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('usuario/plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b></a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Login Usuario</p>

            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif @if(session('falha'))
            <div class="alert alert-danger" role="alert">
                {{session('falha')}}
            </div>
            @endif
            {{ Form::open(['method' => 'post', 'route'=>'logar'])}}
            <div class="form-group has-feedback">
                {{Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Email'] )}}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha'] )}}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
            </div>
            {{Form::close()}}
            <br>
            <a href="#">Recuperar senha</a>
            <br>
            <a href="{{route('cadastrar')}}" class="text-center">Cadastrar</a>
        </div>
    </div>

    <script src="{{asset('usuario/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('usuario/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('usuario/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
</html>
