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
							<h1 style="font-size: 15vw !important; font-style: italic;"> Menú</h1>
							<h2></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">

			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Nuetro delicioso menú</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Contamos con una amplia y exquisita variedad de ofertas , la calidad nos distinge y al final usted dirá Tremendo.</p>
						</div>
					</div>
				</div>
                @php $i=0; @endphp
                @foreach ($posts as $pos)
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					    <div class="fh5co-item animate-box {{ $i++ % 2 == 1 ? 'margin_top' : '' }}">
                            <img src="{{ Voyager::image($pos->image) }}"  style=" box-shadow: 0px 10px 10px black; width: 100%; border-radius: 93px; height:200px;"  class="img-responsive d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400" alt="enSaiz">
                            <h3>{{ $pos->title }}</h3>

                            <p>{{ $pos->excerpt }}</p>
				        </div>
				    </div>
                @endforeach

                {{--
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item animate-box">
						<img src="images/gallery_1.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_2.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item margin_top animate-box">
						<img src="images/gallery_3.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Salted Fried Chicken</h3>
						<span class="fh5co-price">$19<sup>.00</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_4.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item animate-box">
						<img src="images/gallery_5.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Italian Sauce Mushroom</h3>
						<span class="fh5co-price">$17<sup>.99</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_6.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item margin_top animate-box">
						<img src="images/gallery_7.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Fried Potato w/ Garlic</h3>
						<span class="fh5co-price">$22<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_8.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
                --}}
			</div>
		</div>
	</div>




    @endsection
