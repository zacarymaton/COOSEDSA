<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/basic_table')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:13 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../../../alvarez.is/demo/dashio/favicon.html">

    <title>COOSEDSA R.L.</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ url('/index')}}" class="logo"><b>COOSEDSA <span>R.L.</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index') }}#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Dashio Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index') }}#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index') }}#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server Overloaded.
                                    <span class="small italic">4 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Memory #2 Not Responding.
                                    <span class="small italic">30 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Disk Space Reached 85%.
                                    <span class="small italic">2 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New User Registered.
                                    <span class="small italic">3 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                </br>
                    <form class="logout" method="POST" action="{{ route ('logout') }}">
                        {{ csrf_field() }}
                        <li><button class="btn btn-theme" >Cerrar Sesion</button></li>
                      </form>
                    {{--  <li><a class="logout" href="{{ url('/')}}">Logout</a></li>  --}}
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="{{ url('/profile')}}"><img src="/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
              	  <h5 class="centered">{{ $usuario_logeado->name }}</h5>

                  <li class="mt">
                      <a href="{{ url('/index') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  {{-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/general')}}">General</a></li>
                        <li ><a  href="{{ url('/buttons')}}">Buttons</a></li>
                        <li><a  href="{{ url('/panels')}}">Panels</a></li>
                        <li><a  href="{{ url('/font_awesome')}}">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/grids') }}">Grids</a></li>
                        <li ><a  href="{{ url('/calendar') }}">Calendar</a></li>
                        <li><a  href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a  href="{{ url('/todo_list') }}">Todo List</a></li>
                          <li><a  href="{{ url('/dropzone') }}">Dropzone File Upload</a></li>
                          <li ><a  href="{{ url('/inline_editor') }}">Inline Editor</a></li>
                          <li ><a  href="{{ url('/file_upload')}}">Multiple File Upload</a></li>
                      </ul>
                  </li> --}}
                  {{-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/blank')}}">Blank Page</a></li>
                          <li><a  href="{{ url('/')}}">Login</a></li>
                          <li><a  href="{{ url('/lock_screen')}}">Lock Screen</a></li>
                          <li><a  href="{{ url('/profile')}}">Profile</a></li>
                          <li><a  href="{{ url('/invoice')}}">Invoice</a></li>
                          <li><a  href="{{ url('/pricing_table')}}">Pricing Table</a></li>
                          <li><a  href="{{ url('/faq')}}">FAQ</a></li>
                          <li><a  href="{{ url('/404')}}">404 Error</a></li>
                          <li><a  href="{{ url('/500')}}">500 Error</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/form_component')}}">Form Components</a></li>
                          <li><a  href="{{ url('/advanced_form_components')}}">Advanced Components</a></li>
                          <li><a  href="{{ url('/form_validation')}}">Form Validation</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="{{ url('/basic_table')}}">Basic Table</a></li>
                          <li><a  href="{{ url('/responsive_table')}}">Responsive Table</a></li>
                          <li><a  href="{{ url('/advanced_table')}}">Advanced Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="{{ url('/inbox')}}">
                          <i class="fa fa-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-theme pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/morris')}}">Morris</a></li>
                          <li><a  href="{{ url('/chartjs')}}">Chartjs</a></li>
                          <li><a  href="{{ url('/flot_chart')}}">Flot Charts</a></li>
                          <li><a  href="{{ url('/xchart')}}">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/lobby')}}">Lobby</a></li>
                          <li><a  href="{{ url('/chat_room')}}"> Chat Room</a></li>
                      </ul>
                  </li> --}}
                  <li class="sub-menu">
                    <a  href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Registro Del Cliente</span>
                    </a>
                    <ul class="sub">
                      <li><a  href="{{ url('/form_component')}}">Registrar Cliente</a></li>
                      {{--  <li ><a  href="{{ url('/advanced_form_components')}}">Modificar Cliente</a></li>  --}}
                        <li ><a  href="{{ url('/form_validation')}}">Listar Clientes</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-tasks"></i>
                      <span>Administrar Servicios</span>
                  </a>
                  <ul class="sub">
                    <li><a  href="{{ url('/registrar_servicio')}}">Registrar Servicios</a></li>
                    {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Servicios</a></li>  --}}
                    <li><a  href="{{ url('/listar_servicios')}}">Listar Servicios</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                <a class="active" href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Registro Del Personal</span>
                </a>
                <ul class="sub">
                    <li ><a  href="{{ url('/registrar_empresa_servicio')}}">Registrar Empresa Servicio</a></li>
                    <li ><a  href="{{ url('/listar_empresa_servicios')}}">Listar Servicios Empresa</a></li>
                    <li><a  href="{{ url('/registrar_personal')}}">Registrar Personal</a></li>
                    {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Personal</a></li>  --}}
                    <li class="active"><a  href="{{ url('/listar_empleados')}}">Listar Personal</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Administrar Solicitudes</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ url('/registrar_solicitudes')}}">Registrar Solicitudes</a></li>
                    {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Solicitudes</a></li>  --}}
                    <li><a  href="{{ url('/form_validation')}}">Listar Solicitudes</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Asignar Trabajo</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ url('/registrar_trabajo')}}">Registrar Trabajo</a></li>
                    {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Trabajo</a></li>  --}}
                    <li><a  href="{{ url('/form_validation')}}">Listar Trabajo</a></li>
                    <li><a href="{{ url('/google_maps')}}" >
                        <i class="fa fa-map-marker"></i>
                        <span>Seguimiento</span>
                    </a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Reportes Administrativo</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ url('/form_component')}}">Registrar Trabajo</a></li>
                    <li><a  href="{{ url('/advanced_form_components')}}">Modificar Trabajo</a></li>
                    <li><a  href="{{ url('/form_validation')}}">Listar Trabajo</a></li>
                </ul>
            </li>

                  <li>
                      <a href="{{ url('/google_maps')}}" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	{{-- <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
				<div class="row">

	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>First Name</th>
		                              <th>Last Name</th>
		                              <th>Username</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          <tr>
		                              <td>1</td>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                          </tr>
		                          <tr>
		                              <td>2</td>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                          </tr>
		                          <tr>
		                              <td>3</td>
		                              <td>Larry</td>
		                              <td>the Bird</td>
		                              <td>@twitter</td>
		                          </tr>
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->

	                  <div class="col-md-12 mt">
	                  	<div class="content-panel">
	                          <table class="table table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Hover Table</h4>
	                  	  	  <hr>
	                              <thead>
	                              <tr>
	                                  <th>#</th>
	                                  <th>First Name</th>
	                                  <th>Last Name</th>
	                                  <th>Username</th>
	                              </tr>
	                              </thead>
	                              <tbody>
	                              <tr>
	                                  <td>1</td>
	                                  <td>Mark</td>
	                                  <td>Otto</td>
	                                  <td>@mdo</td>
	                              </tr>
	                              <tr>
	                                  <td>2</td>
	                                  <td>Jacob</td>
	                                  <td>Thornton</td>
	                                  <td>@fat</td>
	                              </tr>
	                              <tr>
	                                  <td>3</td>
	                                  <td>Simon</td>
	                                  <td>Mosa</td>
	                                  <td>@twitter</td>
	                              </tr>
	                              </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row --> --}}

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table  id="table_data" class="table table-striped table-advance table-hover" cellspacing="0" width="100%">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Listado de Empleados</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                  <th><i class="fa fa-bullhorn"></i> Apellidos</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Fecha de Nacimiento</th>
                                  <th><i class="fa fa-bookmark"></i> Nro Carnet</th>
                                  <th><i class="fa fa-bookmark"></i> Direccion  </th>
                                  <th><i class="fa fa-bookmark"></i> Telefono</th>
                                  <th><i class="fa fa-bookmark"></i> Ocupacion</th>
                                  <th><i class="fa fa-bookmark"></i> Valor x Hr</th>
                                  <th><i class=" fa fa-edit"></i> Estado</th>
                                  <th><i class=" fa fa-edit"></i> Opciones</th>
                                  {{-- <th></th> --}}
                              </tr>
                              </thead>
                              <tbody>

                                @foreach ($empleados as $value)
                                <tr>
                                    <td>{{$value->nombre_empleado}}</td>
                                    <td>{{$value->apellidos_empleado}}</td>
                                    <td>{{$value->fecha_naci_empleado}}</td>
                                    <td>{{$value->nro_carnet_empleado}}</td>
                                    <td>{{$value->direccion_empleado}}</td>
                                    <td>{{$value->telefono_empleado}}</td>
                                    <td>{{$value->ocupacion}}</td>
                                    <td>{{$value->valor_hr}}</td>
                                    {{--  <td>{{$value->foto_empleado}}</td>  --}}
                                    @if ( $value->estado_empleado  == 1)
                                    <td>
                                        <label class="btn btn-danger btn-floating" >
                                        <i class="material-icons">Inactivo</i></a>
                                    </td>
                                    @endif
                                    @if ( $value->estado_empleado  == 0)
                                    <td>
                                        <label class="btn btn-warning btn-floating"  title="Activo">
                                            <i class="material-icons">Activo</i></a>
                                        </td>
                                    @endif
                                    {{-- <td>{{$value->estado}}</td> --}}
                                    <td><a data-toggle="modal" value="" class="btn btn-theme" data-target="#modificarModal-{{ $value->id }}" title="Editar">
                                        <i class="material-icons">Editar</i></a>
                                    <form action="{{ route('deleteEmpleado', $value->id) }}" method="POST">
                                        {{ @csrf_field() }}
                                    </br>
                                        <button class="btn btn-danger btn-floating"  title="Eliminar">
                                            <i class="material-icons">Eliminar</i></button>
                                    </form>
                                    </td>
                                </tr>
                                @include('modificar_empleado')
                                @endforeach
                              </tbody>
                          </table>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
          COOSEDSA R.L.
              <a href="{{ url('/form_validation')}}" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>

    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          {{--  $('select.styled').customSelect();  --}}
      });

  </script>
  <script src="{{ asset('js/clientes/clientes.js') }}"></script>
  <script src="{{ asset('js/usuariolog/usuariolog.js')}}"></script>
  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/basic_table')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:13 GMT -->
</html>
