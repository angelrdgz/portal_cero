@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="header-store">
			<h3 style="color: #fff;" class="aero-font">Compras</h3>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<nav class="search-menu">
			<ul>
                <li><span>Explora por:</span></li>
                <li>
					<select class="" name="">
						<option value="">Formato</option>
					</select>
				</li>
				<li>
					<select class="" name="">
						<option value="">Tema</option>
					</select>
				</li>
				<li>
					<select class="" name="">
						<option value="">Estilo</option>
					</select>
				</li>
				<li>
					<a href="#" class="btn-app btn-purple rtr double-padding">Buscar</a>
				</li>
				<li class="">
					<span>Buscar por:</span>
					<input type="text" name="" value="" placeholder="Autor, Titulo, Tema o producto">
				</li>
			</ul>
		</nav>
	</div>
	<div class="col-sm-12">
		<div class="row" style="padding: 10px 20px;">
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
		</div>
		<div class="row" style="padding: 10px 20px;">
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
		</div>
		<div class="row" style="padding: 10px 20px;">
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
			<div class="col-sm-3 profile-content">
				<img style="max-width:100%;" src="{{ asset('images/bg_header.jpg') }}" alt="">
				<div class="profile">
					<img src="{{ asset('images/bg_header.jpg') }}" alt="">
					<h1 class="text-center aero-font">Daniela Ramirez</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="row">
					<div class="col-sm-9">
						<p>Portal Cero. 2018 Todos los derechos reservados. Terminos y condiciones</p>
					</div>
					<div class="col-sm-2">
						<ul>
							<li>
								<img src="{{ asset('images/footer/facebook_footer.png') }}" alt="">
							</li>
							<li>
								<img src="{{ asset('images/footer/twitter_footer.png') }}" alt="">
							</li>
							<li>
								<img src="{{ asset('images/footer/instagram_footer.png') }}" alt="">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop