@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">		
		<div class="header-contact">
		    <img src="{{ asset('images/contact/kaboom.png') }}" alt="">	
			<h3 style="color: #fff;" class="aero-font">Contactanos</h3>
		</div>
	</div>
</div>
<div class="row" style="background: #fff;">
	<div class="col-sm-12">
       <div class="container">
       	 <div class="row">
       	 	<div class="col-sm-12">
					<br>
       	 		<p class="text-center">
       	 			Para enviar tu propuesta, escribenos a <a href="mailto:generamoscreadores@portalcero.com" style="color: #6507e4;"><img src="{{ asset('images/contact/EMAIL.png') }}" style="width: 24px; margin: 0 15px;" alt=""> generamoscreadores@portalcero.com</a>
					</p>
					<br>
       	 	</div>
       	 </div>
       	 <br>
       	 <div class="row">
       	 	<div class="col-sm-4">
       	 		<input type="text" placeholder="Nombre" class="form-control no-corner-radius form-control-lg">
       	 	</div>
       	 	<div class="col-sm-4">
       	 		<input type="email" placeholder="Correo" class="form-control no-corner-radius form-control-lg">
       	 	</div>
       	 	<div class="col-sm-4">
       	 		<select name="" id="" class="form-control no-corner-radius form-control-lg">
       	 			<option value="" disabled>¿Que te interesa saber?</option>
       	 		</select>
       	 	</div>
       	 </div>
       	 <br>
       	 <div class="row">
       	 	<div class="col-sm-12">
       	 		<textarea name="" id="" cols="30" rows="10" placeholder="Mensaje" class="form-control no-corner-radius form-control-lg"></textarea>
       	 	</div>
       	 </div>
       	 <br>
       	 <div class="row">
       	 	<div class="col-sm-12">
       	 		<p class="text-center">
       	 			<button href="" class="btn btn-purple rbl rtr aero-font double-padding">Enviar</button>
       	 		</p>
       	 	</div>
       	 </div>
       </div>
	</div>
</div>
@stop