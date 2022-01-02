
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:54:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../../../alvarez.is/demo/dashio/favicon.html">

    <title>Sistema de Control de Seguimiento</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
		        <h2 class="form-login-heading">Registrate</h2>
		        <div class="login-wrap">
		            <input   name="name"  value="{{ old('name') }}"class="form-control" placeholder="Ingresa tu Nombre de Usuario" autofocus>
                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Contraseña" >
                    {!! $errors->first('password','<span class="help-block">:message</span>') !!}
		            <label class="checkbox">
		                <input type="checkbox" value="remember-me"> Recuérdame
		                <span class="pull-right">
		                    <a data-toggle="modal" href="{{ url('/')}}#myModal"> has olvidado tu Contraseña?</a>

		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" ><i class="fa fa-lock"></i> Iniciar Sesión</button>
		            <hr>

		            <div class="login-social-link centered">
		            <p>o puede iniciar sesion a traves de su red social</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Aún no tienes una Cuenta?<br/>
		                <a data-toggle="modal" href="#registroModal">
		                    Crear una cuenta
		                </a>
		            </div>

		        </div>

		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Olvidaste tu Contraseña ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Ingresa tu direcciond de correo para Recuperar contraseña</p>
		                          <input type="text" name="correo" placeholder="correo electronico" autocomplete="off" class="form-control placeholder-no-fix">

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Enviar</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->


		          <!-- Modal -->
                  <form>
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="registroModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Registro de Usuario</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Ingrese un Nombre de Usuario</p>
                                    <input type="text" id="user_new" name="user_new" placeholder="nombre de usuario" autocomplete="off" class="form-control placeholder-no-fix">

                                </div>
                                <div class="modal-body">
                                  <p>Ingrese su contraseña de usuario.</p>
                                  <input type="password" id="password_new" name="password_new" placeholder="ingrese su contraseña de Usuario" autocomplete="off" class="form-control placeholder-no-fix">

                              </div>
                              <div class="modal-body">
                                  <p>Ingrese su Direccion de Correo Electronico</p>
                                  <input type="email" id="email" name="email" placeholder="email" autocomplete="off" class="form-control placeholder-no-fix">

                              </div>

                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                                    <button class="btn btn-theme" type="button" onClick="registro()" >Registrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal -->

                  </form>

		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("/img/login-bg.jpg", {speed: 500});
    </script>
    <script src="{{ asset('js/usuariolog/usuariolog.js') }}"></script>

  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:54:46 GMT -->
</html>
