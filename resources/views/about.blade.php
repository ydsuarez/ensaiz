@extends('landing.inicio')


@section('css')
@endsection

@section('content')
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/Promo.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1 style="font-size: 15vw !important; font-style: italic;">{{ $menu_about }}</h1>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-1 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="images/ensaiz1.png" style=" width: 133%;  height: 312px;" >
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>Nosotros</h2>
						<p>Somos una MIPYMES con servicios de Hospedaje y Restaurantes. Contamos con equipo especializado, con más de 7 años de experiencia. Garantizamos buen alimento, atención y confort.Nuestra Misión es expandirnos por todo el país brindando servicio de excelencia en la gastronomía y el hospedaje</p>

						<p><a href="#" class="btn btn-primary btn-outline">Siquiente</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


    @endsection


