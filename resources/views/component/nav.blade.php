 <div class="fh5co-loader"></div>

	<div id="page">

    <nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> <li class="{{ $menu_about ?? '' }}"><a href="{{ route('about') }}">Nosotros</a></li> <strong>enSaiz</strong>-->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
                    <div id="fh5co-logo"><a href="#"><img src="images/logon.png"  alt=""></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class="fh5co-section {{ $menu_home ?? '' }}"><a href="{{ route('home') }}">Inicio</a></li>

							<li class="fh5co-section {{ $menu_menu ?? '' }}"><a href="{{ route('menu') }}">Menu</a></li>
							<li class="fh5co-section {{ $menu_gallery ?? '' }}"><a href="{{ route('gallery') }}">Galería</a></li>

						</ul>
					</div>
				</div>

			</div>
		<!-- </div> -->
	</nav>

