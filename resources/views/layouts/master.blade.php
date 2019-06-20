<html>
<head>
    <title>Portal Cero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header id="header">
       <div class="navbar navbar-fixed-left">
          <div class="navbar-inner">
             <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <i class="material-icons">menu</i>
             </button>
             <a class="brand" href="/">
                 <img src="{{ asset('images/logo_PortalCero.png') }} " alt="">
             </a>
             <div class="nav-collapse collapse">
                 <ul>
                    <li class="login-link text-center">
                       <a data-toggle="modal" data-target="#loginModal">
                          <img src="{{ asset('images/icono_miperfil.png') }}" alt="">
                          <span>Iniciar Sesión / <br> Registrarte</span>
                      </a>
                  </li>
                  <li><a href="{{ url('cart') }}"><img src="{{ asset('images/icono_tienda.png') }}" alt=""> Carrito</a></li>
                  <li><a href="{{ url('creators') }}"><img src="{{ asset('images/icono_creadores.png') }}" alt=""> Creadores</a></li>
                  <li><a href="{{ url('designers') }}"><img src="{{ asset('images/icono_disenadores.png') }}" alt=""> Diseñadores</a></li>
                  <li><a href="{{ url('allies') }}"><img src="{{asset('images/icono_aliados.png') }}" alt=""> Aliados</a></li>
                  <li><a href="{{ url('competitions') }}"><img src="{{asset('images/icono_competencias.png') }}" alt=""> Competencias</a></li>
                  <li><a href="#"><img src="{{asset('images/icono_dudas.png') }}" alt=""> Dudas</a></li>
                  <li><a href="{{ url('us') }}"><img src="{{asset('images/icono_nbosotros.png') }}" alt=""> Nosotros</a></li>
                  <li><a class="close close-menu" data-toggle="collapse" data-target=".nav-collapse"><i class="material-icons">clear</i></a></li>
              </ul>
          </div>
          <div class="menu float-right">
             <ul>
                <li><a href="{{ url('/') }}" class="active">Inicio</a></li>
                <li><a href="{{ url('universes') }}">Universos</a></li>
                <li><a href="{{ url('store') }}">Tienda</a></li>
                <li><a href="{{ url('contact') }}">Contacto</a></li>
                <li>
                    <a href="{{ url('profile') }}" class="no-padding">
                        <img src="{{ asset('images/icono_miperfil_home.png') }}" alt="">
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#cartModal" class="no-padding">
                        <img src="{{ asset('images/icono_carrito_home.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</header>
<div class="main">
    @yield('content')
</body>
<div class="modal" id="loginModal">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1; color: #fff; margin-right: 50px; margin-top: 50px; font-size: 3em;">
      <span aria-hidden="true">&times;</span>
  </button>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      	<h2 class="text-center aero-font" style="color: #fff;">Hola, ¿Que quieres hacer?</h2>
      	<br>
        <div class="row">
        	<div class="col-sm-6 rbl">
        		<h2 class="text-center aero-font">Registrarme</h2>
                <hr style="border-color: #fff; margin-top: 0.6rem; margin-bottom: 1.4rem; border: 0;border-top: 3px solid #fff;width: 30%;">
                <form method="POST" action="{{action('AuthController@register')}}">
                    @csrf            
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="name" class="form-control no-corner-radius">
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="text" name="email" class="form-control no-corner-radius">
                    </div>
                    <div class="form-group" style="width:48%; float:left;">
                        <label for="">Contraseña</label>
                        <input type="password" name="password" class="form-control no-corner-radius">
                    </div>
                    <div class="form-group" style="width:48%; float:right;">
                        <label for="">Confirmar Contraseña</label>
                        <input type="password" name="confirm" class="form-control no-corner-radius">
                    </div>
                    <br>
                    <p class="text-center">
                        <button class="btn btn-app btn-white rtr rbl double-padding">Registrar</button>
                    </p>
                </form>
            </div>
            <div class="col-sm-6 white-box">
              <h2 class="text-center aero-font">Inicar Sesión</h2>
              <hr style="border-color: #fff; margin-top: 0.6rem; margin-bottom: 1.4rem; border: 0;border-top: 3px solid #6409e3;width: 30%;">
              <form method="POST" action="{{action('AuthController@login')}}">
                @csrf  
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="email" name="email" style="border:4px solid #7600eb;"class="form-control no-corner-radius">
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" style="border:4px solid #7600eb;"class="form-control no-corner-radius">
                </div>
                <br>
                <p class="text-center">
                    <a href="" class=""><img src="{{asset('images/google_btn.png')}}" style="height: 40px;" alt=""></a>
                </p>
                <p class="text-center" style="margin-bottom: 22px;">
                    <button href="" class="btn btn-app btn-purple rtr rbl double-padding">Entrar</button>
                </p>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="modal" id="menuModal">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1; color: #fff; margin-right: 50px; margin-top: 50px; font-size: 3em;">
      <span aria-hidden="true">&times;</span>
  </button>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="text-center aero-font" style="color: #fff;">¿Qué quieres conocer?</h2>
        <br>
        <div class="row">
            <div class="designer-box rtr rbl">
                <a href="">
                <img src="{{ asset('images/ICON_creadores.png') }}" alt="">
                <h6 class="text-content">Creadores</h6>
                </a>
            </div>
            <div class="designer-box rtr rbl">
                <img src="{{ asset('images/ICON_disenadores.png') }}" alt="">
                <h6 class="text-content">Diseñadores</h6>
            </div>
            <div class="designer-box rtr rbl">
                <img src="{{ asset('images/ICON_aliados.png') }}" alt="">
                <h6 class="text-content">Aliados</h6>
            </div>
            <div class="designer-box rtr rbl">
                <img src="{{ asset('images/ICON_miperfil.png') }}" alt="">
                <h6 class="text-content">Mi perfil</h6>
            </div>
            <div class="designer-box rtr rbl">
                <img src="{{ asset('images/ICON_competencias.png') }}" alt="">
                <h6 class="text-content">Competencias</h6>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal" id="cartModal">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1; color: #fff; margin-right: 50px; margin-top: 50px; font-size: 3em;">
      <span aria-hidden="true">&times;</span>
  </button>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container-cart">
          <div class="row">
            <div class="col-sm-7 bg-purple rbl">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="aero-font">
                    <img src="{{asset('images/icono_tienda.png')}}" style="width:120px;" alt="">Mi carrito</h2>
                  <br>
                  <table class="table">
                    <thead>
                      <tr class="text-white">
                        <th></th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(Cart::isEmpty())
                      <tr>
                        <td colspan="5" class="text-center text-white"><b>Carrito Vacio</b></td>
                      </tr>
                      @else

                      @foreach(Cart::getContent() as $item)
                      <tr>
                        <td>
                          <img style="width:80px;" class="rtl rtr rbl rbr" src="https://5.imimg.com/data5/XR/BA/MY-30093235/mens-blank-t-shirt-250x250.jpg" alt="">
                        </td>
                        <td style="vertical-align: middle;" class="text-white"><strong>{{$item->name}}</strong></td>
                        <td style="vertical-align: middle;">
                          <a href=""><i class="text-white">-</i></a>
                          <input type="text" value="{{$item->quantity}}" style="border: 1px solid #fff; background:transparent; color:#fff; border-radius: 10px; height:45px;width: 80px; text-align:center; margin: 0 10px; font-size:1.3em;" name="">
                          <a href=""><i class="text-white">+</i></a>
                        </td>
                        <td class="text-center text-white" style="vertical-align: middle;">${{$item->price}}</td>
                        <td style="vertical-align: middle;">
                          <i class="text-center text-white">X</i>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                      <tr>
                        <td colspan=3>
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Código de descuento: </label>
                            <div class="col-sm-6">
                              <div class="input-group mb-2">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                                <div class="input-group-append">
                                  <div class="input-group-text">Aplicar</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td colspan="2">
                          <h5 class="text-white">Subtotal: ${{Cart::getSubTotal()}}</h5>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-sm-5 bg-white rtr">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="">1. Dirección de envio</h2>
                  <small>1.- Dirección de envio / 2.- Metodo de envio/3.- Método de pago/4.- Confirmación</small>
                </div>
                <div class="col-sm-12" style="margin-top:20px;">
                  <div class="form-group">
                    <label for="">Correo</label>
                    <label for="" class="float-right">Bienvenido, <a href="#">{{Auth::check() ?  Auth::user()->name:'invitado'}}</a></label>
                    <input type="email" class="form-control" value="">
                  </div>
                </div>
                <div class="col-auto">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                    <label class="form-check-label" for="autoSizingCheck">
                      Usar datos personales
                    </label>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h5>Dirección de Envio</h5>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Nombre">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Apellidos">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Dirección">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Apartamento, Número Interior, Número Exterior">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Ciudad">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Pais">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Estado">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Código Postal">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="password" class="form-control no-round" placeholder="Teléfono">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                    <label class="form-check-label" for="autoSizingCheck">
                      Usar datos personales
                    </label>
                  </div>
                </div>
                <br>
                <div class="col-sm-12">
                  <div class="form-group text-right">
                    <a href="#" class="btn-app btn-purple">Continuar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){

    $('.btn-navbar').click(function(){
        $(this).hide();
    })

    $('.close-menu').click(function(){
        $('.btn-navbar').show();
    })

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.navbar').addClass('navbar-black');
        }
        else {
            $('.navbar').removeClass('navbar-black');
        }
    });

})

</script>
</html>
