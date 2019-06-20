@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="header-us">
			<div class="container">


			</div>
		</div>
	</div>
</div>
<div class="row" style="background: #fff;">
	<div class="col-sm-12">
		<div class="container">
			<br>
			<h2 class="text-center text-blue bold uppercase-text">Nosotros</h2>
			<br>
			<p>Somos una empresa dedicada a brindar el mejor contenido de entretenimiento para jóvenes
				adultos, en distintos formatos digitales, y comercializar mercancía original que reflejen su
				identidad y estilo de vida. <b>Somos el portal a nuevos universos.</b>
			</p>
			<p>
				Tenemos un compromiso con el
desarrollo de talento, buscando que los jóvenes no sólo consumancontenido, sino que lo
produzcan, recibiendo apoyo para inspirarse, compartir, diseñar, fabricar y vender sus productos
con nosotros. <b>Desarrollamos creadores de universos.</b>
			</p>
			<p>
				Con este mismo fin, realizamos activaciones
en escuelas y universidades aliadas, promoviendo el espíritu de creación y emprendimiento. Esto
se hace de una manera atractiva al alumno y tematizada por nuestros propios contenidos. A su
vez, brindamos espacios publicitarios para promocionar cursos y programas que desarrollen las
competencias de nuestros creadores y continúen su preparación. <b>Promovemos alianzas.</b>
			</p>
			<br>
			<h5 class="text-center text-blue">Comercializamos productos de marca propia que sirven como herramientas<br> creativas y de diseño
para impulsar a los creadores.</h5>
<br><br>
            <div class="row">
            	<div class="col-sm-2">
            		<img style="width:100px; display:block; margin: 0 auto;" src="{{ asset('images/ICON_contenido.png')}}" alt="">
            	</div>
            	<div class="col-sm-3">
            		<a href="" class="btn btn-app-outline-white btn-block rbl rtr">Nuestro contenido es:</a>
            	</div>
            	<div class="col-sm-7">
            		<p><b>Lúdico:</b> entretiene y juega con nuestras mentes</p>
            		<p><b>Onírico:</b> nos hace soñar y navegar otras realidades.</p>
            		<p><b>Experimental:</b> explora las ideas, emociones y conductas humanas. Hace propuestas artísticas que invitan a la reflexión.</p>
            	</div>
            </div>
            <div class="row">
            	<div class="col-sm-2">
            		<img style="width:100px; display:block; margin: 0 auto;" src="{{ asset('images/ICON_productos.png')}}" alt="">
            	</div>
            	<div class="col-sm-3">
            		<a href="" class="btn btn-app-outline-white btn-block rbl rtr">Nuestro productos son:</a>
            	</div>
            	<div class="col-sm-7">
            		<p><b>Únicos:</b> no se encuentran en otras tiendas y son ediciones limitadas.</p>
            		<p><b>Forman vínculos emocionales:</b> se apoyan en la narrativa de los universos.</p>
            		<p><b>Con un bien social:</b> su venta permite realizar las activaciones en escuelas.</p>
            	</div>
            </div>
            <br>
            <div class="row" class="text-center">
            	<div class="col-sm-12 text-center">
            		<a href="" class="btn btn-purple rbl rtr aero-font">Ve nuestro perfil</a>
            	</div>	
            </div>
            <br>
            <div class="row text-center">
            	<div class="col-sm-12">
            		<p class="text-center">Conoce nuestras Términos y Condiciones. <a href="">Aquí</a></p>	
            	</div>
            </div>
		</div>		  	
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="container" style="padding: 50px 40px;">
			<div class="row">
				<br>
				<div class="col-sm-12">
					<h4 class="text-center text-white">Nuestro Equipo</h4>
				</div>
				<br><br><br>
				<div class="team-box">
					<div class="col-sm-3">
						<div class="partner-box rtr rbl"></div>
						<br>
						<b class="text-white">Nombre</b>
						<br>
						<p class="text-white">Puesto en la empresa</p>
					</div>
					<div class="col-sm-3">
						<div class="partner-box rtr rbl"></div>
						<br>
						<b class="text-white">Nombre</b>
						<br>
						<p class="text-white">Puesto en la empresa</p>
					</div>
					<div class="col-sm-3">
						<div class="partner-box rtr rbl"></div>
						<br>
						<b class="text-white">Nombre</b>
						<br>
						<p class="text-white">Puesto en la empresa</p>
					</div>
					<div class="col-sm-3">
						<div class="partner-box rtr rbl"></div>
						<br>
						<b class="text-white">Nombre</b>
						<br>
						<p class="text-white">Puesto en la empresa</p>
					</div>
				</div>
			</div>
			<br><br><br>
			<div class="row">
				<div class="col-sm-5 offset-sm-2">
					<h2 class="aero-font text-white text-right">¿Dudas? Contáctanos</h2>
				</div>
				<div class="col-sm-2">
					<a href="" class="btn-app btn-white btn-block aero-font uppercase-text rbl rtr">escribir</a>
				</div>
			</div>
		</div>
	</div>
</div>

@stop