<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url('/assets') }}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  @if(app()->getLocale() == 'ar')
   <!-- AdminLTE RtL -->
  <link rel="stylesheet" href="{{ url('/assets') }}/dist/css/adminltertl.css">
  @else
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/assets') }}/dist/css/AdminLTE.min.css">
  @endif
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/assets') }}/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{ url('/assets') }}/index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">{{ trans('lang.newuser') }}</p>

    <form method="post"  action="{{ url('/register') }}">
    {!! csrf_field() !!}

      <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
        <input type="text" class="form-control" placeholder="{{ trans('lang.name') }}" name="name" value="{{ old('name') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif


      <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
        <input type="text" class="form-control" placeholder="{{ trans('lang.username') }}" name="username" value="{{ old('username') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif

      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="{{ trans('lang.email') }}" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

      <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="{{ trans('lang.password') }}" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

      <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('lang.password_confirmation') }}">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> {!! trans('lang.terms') !!}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('lang.register')}}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ url('/assets') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('/assets') }}/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ url('/assets') }}/plugins/iCheck/icheck.min.js"></script>
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
