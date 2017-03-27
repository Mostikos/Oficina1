@extends('main')

@section('content')

				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title text-center">MECÂNICA GERAL / CHECK UP / TESTE DIAGONOSTICO / ALTERAÇÕES MECÂNICAS</h2>

						<figure class="block">
							<img src="{{ URL::asset('dummy/figure1.jpg') }}" alt="">
						</figure>
						<p class="text-center">Nossa Empresa oferece uma vasta gama de serviços desde mecânica geral, alterações mecânicas, check-up geral , assim como reprogramações de centralinas entre outros, disposmos tambem serviços de pintura e chaparia assim como lavagens de viaturas pois as nossas instalações estão dotadas de uma área de serviço, um espaço totalmente dedicado à lavagem automóvel.
						   O serviço é destinado tanto a veículos ligeiros como pesados e possibilita a lavagem de chassis e de motores. </p>

												<div class="feature-grid">
							<div class="feature">
								<figure class="feature-image"><img src="{{ URL::asset('images/icon-cpu.png') }}" alt=""></figure>
								<h2 class="feature-title">Centro de Diagnósticos</h2>
								<p>GUTMANN Messtechnik utilizamos o sistema mais completo do mercado para multi-marcas.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="{{ URL::asset('images/icon-suspension.png') }}" alt=""></figure>
								<h2 class="feature-title">Suspensão</h2>
								<p>Fazemos teste na sua suspensão para assegurar o contacto correcto entre os pneus e a estrada.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="{{ URL::asset('images/icon-engine.png') }}" alt=""></figure>
								<h2 class="feature-title">Motor</h2>
								<p>Realizamos todo o tipo de upgrades e manutenção de motor.<br></br></p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="{{ URL::asset('images/icon-brake.png') }}" alt=""></figure>
								<h2 class="feature-title">Travões</h2>
								<p>	Rectificamos os discos de travão na hora e no sitio.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="{{ URL::asset('images/icon-steering.png') }}" alt=""></figure>
								<h2 class="feature-title">Direção</h2>
								<p>Fazemos alinhamentos numa das máquinas mais modernas do mercado.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="{{ URL::asset('images/icon-exhaust.png') }}" alt=""></figure>
								<h2 class="feature-title">Sistema Escape</h2>
								<p>Fazemos qualquer tipo de alteração no sistema de exaustão.	</p>
							</div>
						</div>
					</div>
				</div>

@endsection