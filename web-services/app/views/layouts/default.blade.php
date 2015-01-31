<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		{{ HTML::style('css/nav.css'); }}
	</head>
	<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
          <a class="navbar-brand" href="#">ActivityHub</a>
          <button class ="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse navHeaderCollapse">
            <!--something in here -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    @yield('content')
	</body>
</html>
