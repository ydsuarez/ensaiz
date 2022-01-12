@extends('landing.inicio')


@section('css')
@endsection

@section('content')
@if (session('msg'))
<div class="col-md-6 text-center">
<div class="alert alert-success" role="alert">
{{ session('msg') }}
</div>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/Promo.webp);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>{{ setting('site.title') }}</h1>
                            <h1 style="font-size: 15vw !important; font-style: italic;"><em>en</em>Saiz</h1>
							<h2>{{ setting('site.description') }}<a href="#" target="_blank"></a></h2>
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
					<img src="images/logo1.png" style=" width: 100%; " alt="enSaiz">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>¿Quienes Somos?</h2>
						<p>{{ setting('site.quienes-somos') }}</p>
						<p><a href="#fh5co-slider" class="btn btn-primary btn-outline">Próxima</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="fh5co-heading">
						<h2>Nuestros Locales</h2>
						<p>La instalación cuenta con lobby, restaurante,espacio privado, terrazas y habitaciones, climatizados y bien decorados para su disfrute.</p>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
					   	<li  style=" width: 100%; background-image: url(images/Promo2.webp);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Lobby-Bar "El dominó"</h2>
													<h2 style="color: rgba(233, 219, 219, 0.897);    font-size: 18px;    line-height: 1.5;">Área para conversar compartir y disfrutar de buena música mientras toma una soda en compañia.</h2>
                                                    <p><a href="#fh5co-featured-menu" class="btn btn-primary btn-outline">Próxima</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="width: 100%; background-image: url(images/Promo18.jpg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Espacio Privado</h2>
													<h2 style=" color: rgba(233, 219, 219, 0.897);    font-size: 18px;    line-height: 1.5;">... un encuentro privado y un ambiente acogedor junto a amigos, familia o pareja.</h2>
													<p><a href="#fh5co-featured-menu" class="btn btn-primary btn-outline">Próxima</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style=" width: 100%; background-image: url(images/Promo9.webp);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Patio "Don Pacho"</h2>
													<h2 style=" color: rgba(233, 219, 219, 0.897);    font-size: 18px;    line-height: 1.5;">Auténticos platos nacionales e intertacionales.</h2>
													<p><a href="#fh5co-featured-menu" class="btn btn-primary btn-outline">Próxima</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
                           	<li style="width: 100%; background-image: url(images/Promo23.webp);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Terrazas</h2>
													<h2 style=" color: rgba(233, 219, 219, 0.897);    font-size: 18px;    line-height: 1.5;">Diseñada para disfrutar de un ambiente exterior con vista hurbana.</h2>
                                                    <p><a href="#fh5co-featured-menu" class="btn btn-primary btn-outline">Próxima</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>

					  	</ul>
				  	</div>
				</aside>
				</div>
			</div>
		</div>
	</div>



    <div id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Servicios</h2>
					<p>Todos con excelencia y prefesionalidad.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="fh5co-blog animate-box">

						<div class="blog-text">

                        <div class="icon"><i style="color:aliceblue; font-size: 7rem; " class="bi bi-snow2"></i></div>
							<h3><a href="#">Climatizado</a></h3>


						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="fh5co-blog animate-box">

						<div class="blog-text">
                        <div class="icon"><i  style="color:aliceblue; font-size: 11rem; " class="bx bx-hotel"></i></div>
							<h3><a href="#">Hospedaje</a></h3>

						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="fh5co-blog animate-box">

						<div class="blog-text">
                        <div class="icon"><i  style="color:aliceblue; font-size: 11rem; "class="bx bx-restaurant"></i></div>
							<h3><a href="#">Alimentos</a></h3>

						</div>
					</div>
				</div>
                <div class="col-md-2">
					<div class="fh5co-blog animate-box">

						<div class="blog-text">
                        <div class="icon"><i  style="color:aliceblue; font-size: 11rem; "class="bx bxs-video"></i></div>
							<h3><a href="#">Videos</a></h3>


						</div>
					</div>
				</div>

                <div class="col-md-2">
					<div class="fh5co-blog animate-box">

						<div class="blog-text">
                        <div class="icon"><i  style="color:aliceblue; font-size: 11rem; "class="bx bxs-wine"></i></div>
							<h3><a href="#">Bebida</a></h3>

						</div>
					</div>
				</div>
                <div class="col-md-2">
					<div class="fh5co-blog animate-box">

						<div class="blog-text">
                        <div class="icon"><i  style="color:aliceblue; font-size: 11rem; "class="bx bx-taxi"></i></div>
							<h3><a href="#">Transporte</a></h3>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Nuestros Platos</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Contamos con una amplia y exquisita variedad de ofertas , la calidad nos distinge y al final usted dirá <i>!Bravo¡</i>.</p>
						</div>
					</div>
				</div>

                @php $i=0; @endphp
                @foreach ($post as $pos)
                    @if ($pos->id< 5)


                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					    <div class="fh5co-item animate-box {{ $i++ % 2 == 1 ? 'margin_top' : '' }}">
                            <img src="{{ Voyager::image($pos->image) }}" style=" border: solid 0.5em #eee;box-shadow: 0px 10px 10px black;width: 83%;border-radius: 116px;height: 196px;" class="img-responsive d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400" alt="enSaiz">
                            <h3>{{ $pos->title }}</h3>

                            <p>{{ $pos->excerpt }}</p>
				        </div>
				    </div>
                    @endif
                @endforeach
			</div>
		</div>
	</div>



                <div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<p><a href="{{ route('menu') }}" class="btn btn-primary btn-outline">Ver Todos Nuestros Platos</a></p>

				</div>
			</div>
			</div>
		</div>
	</div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Equipo de Trabajo</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Personal calificado con más de una década de experiencia, Enfoncados en brindar un servicio de excelencia con buen trato a nuestros clientes. </p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.webp" style="width: 210%;" alt="">
				</div>

			</div>
		</div>
	</div>

    <div id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Habitaciones</h2>
					<p>Nuestra instalación cuenta con tres habitaciones climatizadas, cada una con entradas independientes, seguridad, confort, TV, video, agua fría y caliente, minibar habilitado, espejos panorámicos y servicio de habitación las 24 horas. </p>
				</div>
			</div>


			<div class="row">
				<div class="col-md-4 ">
					<div class="fh5co-blog   margin_top animate-box">
	<div class="easyzoom easyzoom--overlay" >
    <a   href="{{ Voyager::image(setting('site.hostal1')) }}">  <img src="{{ Voyager::image(setting('site.hostal1')) }}" style=" width: 100%; border-radius: 6px; height:285px;"   alt="enSaiz"></a>
					</div>
				</div>
                </div>
                <div class="row">
				<div class="col-md-4 ">
					<div class="fh5co-blog   margin_top animate-box">
	<div class="easyzoom easyzoom--overlay" >
    <a   href="{{ Voyager::image(setting('site.hostal2')) }}">  <img src="{{ Voyager::image(setting('site.hostal2')) }}" style=" width: 100%; border-radius: 6px; height:285px;"   alt="enSaiz"></a>
					</div>
				</div>
                </div>
                <div class="row">
				<div class="col-md-4 ">
					<div class="fh5co-blog   margin_top animate-box">
	<div class="easyzoom easyzoom--overlay" >
    <a   href="{{ Voyager::image(setting('site.hostal3')) }}">  <img src="{{ Voyager::image(setting('site.hostal3')) }}" style=" width: 100%; border-radius: 6px; height:285px;"   alt="enSaiz"></a>
					</div>
				</div>
                </div>


			</div>
		</div>
	</div>



	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Formulario de Contacto</h2>
					<p>Puedes Contactarnos por el formularios de contacto para solicitar nuestros servicios, dudas o sujerencias. Será atendido con prontitud</p>

				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-6">
					<form action="{{ route('contact') }}" method="post" id="form-wrap">
                    {{ csrf_field() }}
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">nombre</label>
								<input type="text" class="form-control" name="name" id="name">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Dirección de Correo</label>
								<input type="text" class="form-control" name="email" id="email">
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="email">Asunto</label>
								<input type="text" class="form-control" name="subject" id="subject">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Mensaje</label>
								<textarea  name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Enviar Mensaje">
							</div>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>


@endsection

@section('scripts')



    <script>
  $(document).ready(function() {
var $easyzoom = $('.easyzoom').easyZoom();
});
    </script>
@endsection
