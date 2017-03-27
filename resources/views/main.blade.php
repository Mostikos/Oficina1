<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>RBNmotorsport</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body >

		<div id="site-content">

			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="{{ URL::asset('images/logo.png') }}" alt="Company Logo" class="logo">
						<h1 class="site-title">RBN<span>motorsport</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item {{{ (Request::is('/') ? 'current-menu-item' : '') }}}"><a href="/">Início</a></li>
							<li class="menu-item {{{ (Request::is('servicos') ? 'current-menu-item' : '') }}}"><a href="/servicos">Serviços</a></li>
							<li class="menu-item {{{ (Request::is('contactos') ? 'current-menu-item' : '') }}}"><a href="/contactos">Contactos</a></li>
							<li class="menu-item {{{ (Request::is('login') ? 'current-menu-item' : '') }}}"><a href="/login">Login</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				@yield('content')
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="copy">
						<p>Copyright 2014 RBNmotorsport. All rights reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->



		<script src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="{{ URL::asset('js/plugins.js') }}"></script>
		<script src="{{ URL::asset('js/app.js') }}"></script>

	</body>

</html>
