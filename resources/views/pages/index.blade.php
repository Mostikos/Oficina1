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


	<body class="header-collapse">

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
							<li class="menu-item current-menu-item"><a href="/">Início</a></li>
							<li class="menu-item"><a href="/servicos">Serviços</a></li>
							<li class="menu-item"><a href="/contactos">Contactos</a></li>
							<li class="menu-item"><a href="/login">Login</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="hero hero-slider">
					<ul class="slides">
						<li data-bg-image="{{ URL::asset('dummy/bg1.jpg') }}" style="background-size: cover;">
							<div class="container">
								<h2 class="slide-title">Mecânica Geral</h2>
								<p class="slide-desc">Efetuamos todo o tipo de mecânica geral.</p>
							</div>
						</li>
						<li data-bg-image="{{ URL::asset('dummy/bg2.jpg') }}" style="background-size: cover;">
							<div class="container">
								<h2 class="slide-title">Customização Exterior</h2>
								<p class="slide-desc">Efetuamos todo o tipo de customização exterior.</p>
							</div>
						</li>
						<li data-bg-image="{{ URL::asset('dummy/bg3.jpg') }}" style="background-size: cover;">
							<div class="container">
								<h2 class="slide-title">Customização Interior</h2>
								<p class="slide-desc">Efetuamos todo o tipo de alteração de interiores.</p>
							</div>
						</li>
					</ul>
				</div> <!-- .hero-slider -->

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Bem-vindo à RBNmotorsport</h2>
						<p class="section-desc">Nós somos uma empresa que realiza toda a manutenção e customização automóvel em todos os aspectos.</p>
						<!--<p class="section-desc">Alguns dos nossos Serviços:</p>
						<div class="row">

							<div class="counter">
								<a href="services.html"><img src="images/icon-car.png" class="counter-icon"></a>
							</div>


							<div class="counter">
								<a href="services.html"><img src="images/icon-wrench.png" class="counter-icon"></a>
							</div>


							<div class="counter">
								<a href="services.html"><img src="images/icon-gears.png" class="counter-icon"></a>
								
							</div>


							<div class="counter last">
								<a href="services.html"><img src="images/icon-oil.png" class="counter-icon"></a>
								
							</div>

						</div>-->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block dark-bg" data-bg-color="#1b1b1b">
					<div class="container">
						<h2 class="section-title">A nossa Equipa</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="team">
									<figure class="team-image"><img src="{{ URL::asset('dummy/person-1.jpg') }}" alt="person-1"></figure>
									<h3 class="team-name">Ricardo Moreira</h3>
									<!--<small class="team-desc">Main mechaninc</small>-->
									</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="team">
									<figure class="team-image"><img src="{{ URL::asset('dummy/person-1.jpg') }}" alt="person-2"></figure>
									<h3 class="team-name">Bertino Ferreira</h3>
									<!--<small class="team-desc">Painter</small>-->
									</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="team">
									<figure class="team-image"><img src="{{ URL::asset('dummy/person-1.jpg') }}" alt="person-3"></figure>
									<h3 class="team-name">Nuno Oliveira</h3>
									<!--<small class="team-desc">Engineer</small>-->
									</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="team">
									<figure class="team-image"><img src="{{ URL::asset('dummy/person-1.jpg') }}" alt="person-4"></figure>
									<h3 class="team-name">Ricardo Sousa</h3>
									<!--<small class="team-desc">Engineer</small>-->
									</div>
							</div>

						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">O porquê de escolher a nossa Oficina ?</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="feature">
									<div class="feature-icon">
										<img src="{{ URL::asset('images/icon-wheel-white.png') }}">
									</div>
									<h3 class="feature-title">Orçamentos</h3>
									<p>Fazemos orçamentos para a sua viatura sem qualquer custo adicional.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<div class="feature-icon">
										<img src="{{ URL::asset('images/icon-wrench-white.png') }}">
									</div>
									<h3 class="feature-title">Agendar</h3>
									<p>Através do nosso site pode agendar a reparação do seu automóvel.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<div class="feature-icon">
										<img src="{{ URL::asset('images/icon-key-white.png') }}">
									</div>
									<h3 class="feature-title">Status da Reparação</h3>
									<p>Através do nosso site poderá verificar o status da reparação do seu automóvel.</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->


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
