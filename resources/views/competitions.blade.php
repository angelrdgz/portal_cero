@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="header-competitions">
			<div class="container">
				<img style="width:100px; display:block; margin: 30px auto;" src="{{ asset('images/competitions/ICON_competenciasmain.png') }}" alt="">
				<p class="text-center text-white">
					En Portal Cero colocamos diferentes retos y competencias usando nuestras historias y productos o para generarlos.<br><b>Revisa aquí los próximos eventos que tenemos.</b>
				</p>
			</div>
			<h3 style="color: #fff;" class="aero-font">Conoce nuestras competencias</h3>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="competitions-box">
		<div class="competition-box">
			<div class="image-box">
				<img class="icon" src="{{ asset('images/competitions/ICON_escritos.png')}}" alt="">
			</div>
			<div class="info-box">
				<p>Nombre del evento</p>
				<a href="" class="btn btn-purple aero-font rbl rtr double-padding">Ver más</a>
			</div>
		</div>
		<div class="competition-box">
			<div class="image-box">
				<img class="icon" src="{{ asset('images/competitions/ICON_videojuegos.png')}}" alt="">
			</div>
			<div class="info-box">
				<p>Nombre del evento</p>
				<a href="" class="btn btn-purple aero-font rbl rtr double-padding">Ver más</a>
			</div>
		</div>
		<div class="competition-box">
			<div class="image-box">
				<img class="icon" src="{{ asset('images/competitions/ICON_tshirt.png')}}" alt="">
			</div>
			<div class="info-box">
				<p>Nombre del evento</p>
				<a href="" class="btn btn-purple aero-font rbl rtr double-padding">Ver más</a>
			</div>
		</div>
		<div class="competition-box">
			<div class="image-box">
				<img class="icon" src="{{ asset('images/competitions/ICON_illustration.png')}}" alt="">
			</div>
			<div class="info-box">
				<p>Nombre del evento</p>
				<a href="" class="btn btn-purple aero-font rbl rtr double-padding">Ver más</a>
			</div>
		</div>
	</div>
</div>
@stop