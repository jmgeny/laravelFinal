<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
	<header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="{{ url('/') }}">Soy Deporte</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="{{ url('/home') }}"><strong>{{ Auth::user()->name }}</strong></a></li>
		      <li><a href="{{ route('post.index') }}">Post</a></li>
				@guest
		      <li><a href="{{ route('register') }}">Registrarte</a></li>
		      <li><a href="{{ route('login') }}">Entrar</a></li>
				@else
		      <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </a>
               </li>
               @endguest
		    </ul>
		  </div>
		</nav>
	</header>
	
		<section class="container">
			@yield('content')
		</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>