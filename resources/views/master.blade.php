<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>studying-in-berlin.com</title>
		
		<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
		<script type="text/javascript" src="{{ asset('asset/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nachrichten <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/studying') }}">Studieren</a></li>
							<li><a href="#">Wohnung finden</a></li>
							<li><a href="#">Job finden</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Musik <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Streaming</a></li>
							<li><a href="#">Musiksammlung</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Kategorie #1</a></li>
							<li><a href="#">Kategorie #2</a></li>
							<li><a href="#">Kategorie #3</a></li>
							<li><a href="#">Kategorie #4</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zusammen lernen <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Sprache lernen</a></li>
							<li><a href="#">Technik</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Anlegen</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sprachen <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Deutsch</a></li>
							<li><a href="#">Englisch</a></li>
							<li><a href="#">Russisch</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</nav>
		
		@yield('content')
	</body>
</html>