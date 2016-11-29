<html>
	<head> 
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<title> Sistema de cadastro </title>
	</head>
	
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="/home" class="navbar-brand"> Sistema de cadastro </a> 
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li> <a href="{{action('UserController@lista')}}" class="btn btn-primary"> Usuários </a> </li>
					<li> <a href="{{action('TypeController@lista')}}" class="btn btn-primary"> Tipos </a> </li>
				</ul>
			</div>
			
		</nav>

		<div class="container">
			
			@yield('conteudo')
			
		</div>

		<footer class="footer">
			<p> @Sistemas de cadastro/ Emerson barbosa </p>
		</footer>
	</body>
</html>		