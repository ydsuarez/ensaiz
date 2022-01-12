@extends('landing.inicio')


@section('css')
@endsection

@section('content')
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/Promo.webp);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1 style="font-size: 15vw !important; font-style: italic;"> Galería</h1>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div id="fh5co-gallery" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Galería</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Todo mostrado en imágenes.Nuestros Locales, Meceras y Cosineros.</p>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/galeria1.webp);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/galeria2.webp);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/galeria3.webp);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/galleria_1.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/galeria4.webp);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/Promo23.webp);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/Promo18.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/galeria5.webp);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/Promo20.webp);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/galeria7.webp);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_1.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/nuevo.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/Promo13.webp);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_4.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpg);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_6.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_7.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_8.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/person_1.webp);" data-trigger="zoomerang"></div>
				</div>
			</div>
		</div>
	</div>

@endsection


@section('scripts')
    <script src="js/zoomerang.js"></script>
    <script>
        Zoomerang
        .config({
            maxHeight: 600,
            maxWidth: 900,
            bgColor: '#000',
            bgOpacity: .85
        })
        .listen('[data-trigger="zoomerang"]')
    </script>
@endsection
