<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>

  <body>
      <div class="container">
        <h2 class="form-signin-heading">Log in</h2>
      {{ Form::open(['route' => 'session.store'], array('class' => 'form-signin')) }}
        <div>
            {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'E-mail address')) }}
        </div>

        <div>
            {{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Password')) }}
        </div>

        <div>
            {{ Form::submit('Login', array('class' => 'btn btn-lg btn-info btn-block')) }}
        </div>
      {{ Form::close() }}
    </div>
  </body>
</html>
