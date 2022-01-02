<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/advanced_form_components')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:03 GMT -->
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
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap-datetimepicker/datertimepicker.html" />

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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index')}}#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index')}}#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index')}}#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server Overloaded.
                                    <span class="small italic">4 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Memory #2 Not Responding.
                                    <span class="small italic">30 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Disk Space Reached 85%.
                                    <span class="small italic">2 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New User Registered.
                                    <span class="small italic">3 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">See all notifications</a>
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
                      <a href="{{ url('/index')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  {{--  <li class="sub-menu">
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
                  </li>
                  <li class="sub-menu">
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
                  </li>  --}}
                  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Registro Del Cliente</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="{{ url('/form_component')}}">Registrar Cliente</a></li>
                          {{--  <li ><a  href="{{ url('/advanced_form_components')}}">Modificar Cliente</a></li>  --}}
                          <li><a  href="{{  route('form_validation')}}">Listar Clientes</a></li>
                      </ul>
                  </li>
                  {{--  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/basic_table')}}">Basic Table</a></li>
                        <li><a  href="{{ url('/responsive_table')}}">Responsive Table</a></li>
                        <li><a  href="{{ url('/advanced_table')}}">Advanced Table</a></li>
                      </ul>
                  </li>  --}}
                  <li class="sub-menu">
                    <a  href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Administrar Servicios</span>
                    </a>
                    <ul class="sub">
                      <li ><a  href="{{ url('/registrar_servicio')}}">Registrar Servicios</a></li>
                      {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Servicios</a></li>  --}}
                      <li><a  href="{{ url('/form_validation')}}">Listar Servicios</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                  <a  href="javascript:;" >
                      <i class="fa fa-tasks"></i>
                      <span>Registro Del Personal</span>
                  </a>
                  <ul class="sub">
                    <li ><a  href="{{ url('/registrar_empresa_servicio')}}">Registrar Empresa Servicio</a></li>
                    <li ><a  href="{{ url('/listar_empresa_servicios')}}">Listar Servicios Empresa</a></li>
                      <li ><a  href="{{ url('/registrar_personal')}}">Registrar Personal</a></li>
                      {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Personal</a></li>  --}}
                      <li><a  href="{{ url('/listar_empleados')}}">Listar Personal</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a  href="javascript:;" >
                      <i class="fa fa-tasks"></i>
                      <span>Administrar Solicitudes</span>
                  </a>
                  <ul class="sub">
                      <li ><a  href="{{ url('/registrar_solicitudes')}}">Registrar Solicitudes</a></li>
                      {{--  <li><a  href="{{ url('/advanced_form_components')}}">Modificar Solicitudes</a></li>  --}}
                      <li><a  href="{{ url('/form_validation')}}">Listar Solicitudes</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="active" href="javascript:;" >
                      <i class="fa fa-book"></i>
                      <span>Asignar Trabajo</span>
                  </a>
                  <ul class="sub">
                      <li class="active"><a  href="{{ url('/registrar_trabajo')}}">Registrar Trabajo</a></li>
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
                  {{--  <li>
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
                        <li ><a  href="{{ url('/flot_chart')}}">Flot Charts</a></li>
                        <li ><a  href="{{ url('/xchart')}}">xChart</a></li>
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
                  </li>  --}}
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
          	<h3><i class="fa fa-angle-right"></i>Registrar Trabajo</h3>
          	<div class="row mt">

          		<! -- DATE PICKERS -->
	          	<div class="col-lg-12">
		          	<div class="form-panel">
		                  <form method="POST" action="/registrar_cliente" class="form-horizontal style-form">
                           @csrf
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Nombre</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Nombre" name="nombre" id="nombre" class="form-control">
                                    <p class="help-block">nombre de cliente</p>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Apellidos</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Apellido Paterno y Apellido Materno"  name="apellidos" id="apellidos" class="form-control">
                                    <p class="help-block">apellidos del cliente</p>
                                </div>
                            </div>

		                      <div class="form-group">
		                          <label class="control-label col-md-3">Fecha de Nacimiento</label>
		                          <div class="col-md-3 col-xs-11">

		                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
		                                  <input type="text" readonly="" value="01-01-2014" size="16"  name="fecha_naci" id="fecha_naci" class="form-control">
		                                      <span class="input-group-btn add-on">
		                                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
		                                      </span>
		                              </div>
		                              <span class="help-block">Seleccione Fecha de Nacimiento</span>
		                          </div>
		                      </div>
                              <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Nro Carnet</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Nro CI de Cliente" name="nro_carnet" id="nro_carnet" class="form-control">
                                    <p class="help-block">Nro Carnet del cliente</p>
                                </div>
                            </div>
                              <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Direccion</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Direccion Domicilio" name="direccion" id="direccion" class="form-control">
                                    <p class="help-block">Domicilio del cliente</p>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Telefono</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Nro Celular o Nro Fijo" name="telefono" id="telefono" class="form-control">
                                    <p class="help-block">Telefono del cliente</p>
                                </div>
                            </div>
		                      {{--  <div class="form-group">
		                          <label class="control-label col-md-3">Months Only</label>
		                          <div class="col-md-3 col-xs-11">
		                              <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="01/2014" class="input-append date dpMonths">
		                                  <input type="text" readonly="" value="01/2014" size="16" class="form-control">
		                                      <span class="input-group-btn add-on">
		                                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
		                                      </span>
		                              </div>
		                              <span class="help-block">Select month only</span>
		                          </div>
		                      </div>
		                      <div class="form-group">
		                          <label class="control-label col-md-3">Date Range</label>
		                          <div class="col-md-4">
		                              <div class="input-group input-large" data-date="01/01/2014" data-date-format="mm/dd/yyyy">
		                                  <input type="text" class="form-control dpd1" name="from">
		                                  <span class="input-group-addon">To</span>
		                                  <input type="text" class="form-control dpd2" name="to">
		                              </div>
		                              <span class="help-block">Select date range</span>
		                          </div>
		                      </div>  --}}
                              <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit">Registrar Cliente</button>
                                    <button class="btn btn-theme04" type="button">Cancelar</button>
                                </div>
                            </div>
		                  </form>
		            </div><!-- /form-panel -->
	          	</div><!-- /col-lg-12 -->
          	</div><!-- /row -->


          	 <!-- DATE TIME PICKERS -->
             {{--  <div class="row mt">
                  <div class="col-lg-12">
                      <div class="form-panel">
                          <form class="form-horizontal  style-form" action="#">
                              <div class="form-group">
                                  <label class="control-label col-md-3">Default input Datetimepicker</label>
                                  <div class="col-md-4">
                                      <input size="16" type="text" value="2014-01-01 10:00" readonly class="form_datetime form-control">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="control-label col-md-3"> Component Datetimepicker</label>
                                  <div class="col-md-4">
                                      <div class="input-group date form_datetime-component">
                                          <input type="text" class="form-control" readonly="" size="16">
                                            <span class="input-group-btn">
                                            <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
                                            </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3">Advance Datetimepicker</label>
                                  <div class="col-md-4">
                                      <div data-date="2014-02-01T10:05:00Z" class="input-group date form_datetime-adv">
                                          <input type="text" class="form-control" readonly="" size="16">
                                          <div class="input-group-btn">
                                              <button type="button" class="btn btn-theme02 date-reset"><i class="fa fa-times"></i></button>
                                              <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="control-label col-md-3">Meridian Format</label>
                                  <div class="col-md-4">
                                      <div data-date="2014-01-18T15:00:00Z" class="input-group date form_datetime-meridian">
                                          <input type="text" class="form-control" readonly="" size="16">
                                          <div class="input-group-btn">
                                              <button type="button" class="btn btn-theme02 date-reset"><i class="fa fa-times"></i></button>
                                              <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div><!-- /form-panel -->
                  </div><! --/col-lg-12 -->
              </div><! --row -->


              <! -- TIME PICKERS -->
              <div class="row mt">
                  <div class="col-lg-12">
                      <div class="form-panel">
                          <form class="form-horizontal  style-form" action="#">
                              <div class="form-group">
                                  <label class="control-label col-md-3">Default Timepicker</label>
                                  <div class="col-md-4">
                                      <div class="input-group bootstrap-timepicker">
                                          <input type="text" class="form-control timepicker-default">
                                            <span class="input-group-btn">
                                            <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                                            </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3">24hr Timepicker</label>
                                  <div class="col-md-4">
                                      <div class="input-group bootstrap-timepicker">
                                          <input type="text" class="form-control timepicker-24">
                                            <span class="input-group-btn">
                                            <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                                            </span>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div><!-- /form-panel -->
                  </div><! --/col-lg-12 -->
              </div><! --row -->  --}}

          	  <!--ADVANCED FILE INPUT-->
                <h3><i class="fa fa-angle-right"></i>Registrar Datos de  Usuario</h3>
              <div class="row mt">
                  <div class="col-lg-12">
                      <div class="form-panel">
                          <form action="#" class="form-horizontal style-form">
                              {{--  <div class="form-group">
                                  <label class="control-label col-md-3">Default</label>
                                  <div class="col-md-4">
                                      <input type="file" class="default" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3">Without input</label>
                                  <div class="controls col-md-9">
                                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select file</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" class="default" />
                                        </span>
                                          <span class="fileupload-preview" style="margin-left:5px;"></span>
                                          <a href="{{ url('/advanced_form_components')}}#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                      </div>
                                  </div>
                              </div>  --}}
                              <div class="form-group last">
                                  <label class="control-label col-md-3">Imagen de Usuario</label>
                                  <div class="col-md-9">
                                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                              <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                          </div>
                                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                          <div>
                                              <span class="btn btn-theme02 btn-file">
	                                              <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
	                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar Imagen</span>
	                                              <input type="file" class="default" />
											  </span>
                                              <a href="{{ url('/advanced_form_components')}}#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Borrar Imagen</a>
                                          </div>
                                      </div>
                                      <span class="label label-info">NOTA!</span>
                                     <span>
                                        La miniatura de la imagen adjunta solo es compatible con las versiones más recientes de Firefox, Chrome, Opera, Safari e Internet Explorer 10.
                                     </span>
                                  </div>
                              </div>
                              <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">Nombre de Usuario</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="username" name="username" type="text" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">Contraseña del Usuario</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="password" name="password" type="password" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="confirm_password" class="control-label col-lg-2">Confirmar Contraseña</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">Correo Electronico</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="email" name="email" type="email" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="agree" class="control-label col-lg-2 col-sm-3">Aceptar nuestra Politica</label>
                                <div class="col-lg-10 col-sm-9">
                                    <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Recibir Notificaciones por Correo Electronico</label>
                                <div class="col-lg-10 col-sm-9">
                                    <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit">Registrar Usuario</button>
                                    <button class="btn btn-theme04" type="button">Cancelar Registro</button>
                                </div>
                            </div>
                          </form>
                      </div><!-- /form-panel -->
                  </div><! --/col-lg-12 -->
              </div><! --row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="{{ url('/advanced_form_components')}}#" class="go-top">
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


    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="/js/jquery-ui-1.9.2.custom.min.js"></script>

	<script type="text/javascript" src="/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="/js/bootstrap-daterangepicker/daterangepicker.js"></script>

	<script type="text/javascript" src="/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="/js/bootstrap-daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>


	<script src="/js/advanced-form-components.js"></script>


  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>


  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/advanced_form_components')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:12 GMT -->
</html>
