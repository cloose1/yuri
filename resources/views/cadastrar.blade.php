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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Painel</b></a>
  </div>

  <div class="register-box-body">
    @if(session('fail'))
      <div class="alert alert-danger" role="alert">
          {{session('fail')}}
      </div>
    @endif
    @if (count($errors) > 0)
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif

    <p class="login-box-msg">Cadastrar Usuário</p>

      {{ Form::open(['method' => 'post', 'route'=>'register'])}}

      <div class="form-group has-feedback">
        {{Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nome Completo'] )}}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         {{Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Email'] )}}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha'] )}}

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {{Form::password('conf_password', ['class'=>'form-control', 'placeholder'=>'Confirmar Senha'] )}}
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success btn-block btn-flat">Cadastrar</button>
        </div>
        <!-- /.col -->
      </div>
    {{Form::close()}}
    <br>
<a href="{{route('login')}}">Voltar</a>

  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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
