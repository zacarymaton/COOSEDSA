<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/font_awesome')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:55:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../../../alvarez.is/demo/dashio/favicon.html">

    <title>DASHIO - Bootstrap Admin + Front-End template</title>

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
            <a href="{{ url('/index')}}" class="logo"><b>DASH<span>IO</span></b></a>
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
                    <li><a class="logout" href="{{ url('/')}}">Logout</a></li>
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
              	  <h5 class="centered">Sam Soffes</h5>

                  <li class="mt">
                      <a href="{{ url('/index')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/general')}}">General</a></li>
                          <li><a  href="{{ url('/buttons')}}">Buttons</a></li>
                          <li><a  href="{{ url('/panels')}}">Panels</a></li>
                          <li class="active"><a  href="{{ url('/font_awesome')}}">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/grids') }}">Grids</a></li>
                          <li><a  href="{{ url('/calendar') }}">Calendar</a></li>
                          <li><a  href="{{ url('/gallery') }}">Gallery</a></li>
                          <li><a  href="{{ url('/todo_list') }}">Todo List</a></li>
                          <li><a  href="{{ url('/dropzone') }}">Dropzone File Upload</a></li>
                          <li><a  href="{{ url('/inline_editor') }}">Inline Editor</a></li>
                          <li><a  href="{{ url('/file_upload')}}">Multiple File Upload</a></li>
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
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/basic_table')}}">Basic Table</a></li>
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
          <section class="wrapper mt">
      			<h3><i class="fa fa-angle-right"></i> Font Awesome Icon List - Ver. 4.0</h3>
      			<hr>
      			<!-- NEW ICONS -->
      			<h4><i class="fa fa-angle-right"></i> New Icons</h4>
	      			<div class="fontawesome-list row">
	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-rub"></i> fa-rub</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-pagelines"></i> fa-pagelines</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-try"></i> fa-try</a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a></div>

	                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>
	      			</div>

      			<hr>
      			<!-- WEB APPLICATION ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Web Application Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-adjust"></i> fa-adjust</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-anchor"></i> fa-anchor</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-archive"></i> fa-archive</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-arrows"></i> fa-arrows</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-arrows-h"></i> fa-arrows-h</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-arrows-v"></i> fa-arrows-v</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-asterisk"></i> fa-asterisk</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-ban"></i> fa-ban</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-barcode"></i> fa-barcode</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bars"></i> fa-bars</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-beer"></i> fa-beer</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bell"></i> fa-bell</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bell-o"></i> fa-bell-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bolt"></i> fa-bolt</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-book"></i> fa-book</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bookmark"></i> fa-bookmark</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-briefcase"></i> fa-briefcase</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bug"></i> fa-bug</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-building-o"></i> fa-building-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bullhorn"></i> fa-bullhorn</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-bullseye"></i> fa-bullseye</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-calendar"></i> fa-calendar</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-calendar-o"></i> fa-calendar-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-camera"></i> fa-camera</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-camera-retro"></i> fa-camera-retro</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-certificate"></i> fa-certificate</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-check"></i> fa-check</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-check-circle"></i> fa-check-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-check-square"></i> fa-check-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-check-square-o"></i> fa-check-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-circle"></i> fa-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-circle-o"></i> fa-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-clock-o"></i> fa-clock-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-cloud"></i> fa-cloud</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-cloud-download"></i> fa-cloud-download</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-code"></i> fa-code</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-code-fork"></i> fa-code-fork</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-coffee"></i> fa-coffee</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-cog"></i> fa-cog</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-cogs"></i> fa-cogs</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-comment"></i> fa-comment</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-comment-o"></i> fa-comment-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-comments"></i> fa-comments</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-comments-o"></i> fa-comments-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-compass"></i> fa-compass</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-credit-card"></i> fa-credit-card</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-crop"></i> fa-crop</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-crosshairs"></i> fa-crosshairs</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-cutlery"></i> fa-cutlery</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-desktop"></i> fa-desktop</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-download"></i> fa-download</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-envelope"></i> fa-envelope</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-envelope-o"></i> fa-envelope-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-eraser"></i> fa-eraser</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-exchange"></i> fa-exchange</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-exclamation"></i> fa-exclamation</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-external-link"></i> fa-external-link</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-external-link-square"></i> fa-external-link-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-eye"></i> fa-eye</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-eye-slash"></i> fa-eye-slash</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-female"></i> fa-female</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-film"></i> fa-film</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-filter"></i> fa-filter</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-fire"></i> fa-fire</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-flag"></i> fa-flag</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-flag-o"></i> fa-flag-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-flask"></i> fa-flask</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-folder"></i> fa-folder</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-folder-o"></i> fa-folder-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-folder-open"></i> fa-folder-open</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-frown-o"></i> fa-frown-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-gamepad"></i> fa-gamepad</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-gavel"></i> fa-gavel</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-gift"></i> fa-gift</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-glass"></i> fa-glass</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-globe"></i> fa-globe</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-hdd-o"></i> fa-hdd-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-headphones"></i> fa-headphones</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-heart"></i> fa-heart</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-heart-o"></i> fa-heart-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-home"></i> fa-home</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-inbox"></i> fa-inbox</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#"><i class="fa fa-info"></i> fa-info</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#info-circle"><i class="fa fa-info-circle"></i> fa-info-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#key"><i class="fa fa-key"></i> fa-key</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#keyboard-o"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#laptop"><i class="fa fa-laptop"></i> fa-laptop</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#leaf"><i class="fa fa-leaf"></i> fa-leaf</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#gavel"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#lemon-o"><i class="fa fa-lemon-o"></i> fa-lemon-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#level-down"><i class="fa fa-level-down"></i> fa-level-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#level-up"><i class="fa fa-level-up"></i> fa-level-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#lightbulb-o"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#location-arrow"><i class="fa fa-location-arrow"></i> fa-location-arrow</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#lock"><i class="fa fa-lock"></i> fa-lock</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#magic"><i class="fa fa-magic"></i> fa-magic</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#magnet"><i class="fa fa-magnet"></i> fa-magnet</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#share"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#reply"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#mail-reply-all"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#male"><i class="fa fa-male"></i> fa-male</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#map-marker"><i class="fa fa-map-marker"></i> fa-map-marker</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#meh-o"><i class="fa fa-meh-o"></i> fa-meh-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#microphone"><i class="fa fa-microphone"></i> fa-microphone</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#microphone-slash"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#minus"><i class="fa fa-minus"></i> fa-minus</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#minus-circle"><i class="fa fa-minus-circle"></i> fa-minus-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#mobile"><i class="fa fa-mobile"></i> fa-mobile</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#mobile"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#money"><i class="fa fa-money"></i> fa-money</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#moon-o"><i class="fa fa-moon-o"></i> fa-moon-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#music"><i class="fa fa-music"></i> fa-music</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pencil"><i class="fa fa-pencil"></i> fa-pencil</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pencil-square"><i class="fa fa-pencil-square"></i> fa-pencil-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pencil-square-o"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#phone"><i class="fa fa-phone"></i> fa-phone</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#phone-square"><i class="fa fa-phone-square"></i> fa-phone-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#picture-o"><i class="fa fa-picture-o"></i> fa-picture-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plane"><i class="fa fa-plane"></i> fa-plane</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus"><i class="fa fa-plus"></i> fa-plus</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus-circle"><i class="fa fa-plus-circle"></i> fa-plus-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#power-off"><i class="fa fa-power-off"></i> fa-power-off</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#print"><i class="fa fa-print"></i> fa-print</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#puzzle-piece"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#qrcode"><i class="fa fa-qrcode"></i> fa-qrcode</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#question"><i class="fa fa-question"></i> fa-question</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#question-circle"><i class="fa fa-question-circle"></i> fa-question-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#quote-left"><i class="fa fa-quote-left"></i> fa-quote-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#quote-right"><i class="fa fa-quote-right"></i> fa-quote-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#random"><i class="fa fa-random"></i> fa-random</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#refresh"><i class="fa fa-refresh"></i> fa-refresh</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#reply"><i class="fa fa-reply"></i> fa-reply</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#reply-all"><i class="fa fa-reply-all"></i> fa-reply-all</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#retweet"><i class="fa fa-retweet"></i> fa-retweet</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#road"><i class="fa fa-road"></i> fa-road</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#rocket"><i class="fa fa-rocket"></i> fa-rocket</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#rss"><i class="fa fa-rss"></i> fa-rss</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#rss-square"><i class="fa fa-rss-square"></i> fa-rss-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#search"><i class="fa fa-search"></i> fa-search</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#search-minus"><i class="fa fa-search-minus"></i> fa-search-minus</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#search-plus"><i class="fa fa-search-plus"></i> fa-search-plus</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#share"><i class="fa fa-share"></i> fa-share</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#share-square"><i class="fa fa-share-square"></i> fa-share-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#share-square-o"><i class="fa fa-share-square-o"></i> fa-share-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#shield"><i class="fa fa-shield"></i> fa-shield</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#shopping-cart"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sign-in"><i class="fa fa-sign-in"></i> fa-sign-in</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sign-out"><i class="fa fa-sign-out"></i> fa-sign-out</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#signal"><i class="fa fa-signal"></i> fa-signal</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sitemap"><i class="fa fa-sitemap"></i> fa-sitemap</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#smile-o"><i class="fa fa-smile-o"></i> fa-smile-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort"><i class="fa fa-sort"></i> fa-sort</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-alpha-asc"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-alpha-desc"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-amount-asc"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-amount-desc"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-asc"><i class="fa fa-sort-asc"></i> fa-sort-asc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-desc"><i class="fa fa-sort-desc"></i> fa-sort-desc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-asc"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-numeric-asc"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-numeric-desc"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort-desc"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#spinner"><i class="fa fa-spinner"></i> fa-spinner</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#square"><i class="fa fa-square"></i> fa-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#square-o"><i class="fa fa-square-o"></i> fa-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#star"><i class="fa fa-star"></i> fa-star</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#star-half"><i class="fa fa-star-half"></i> fa-star-half</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#star-half-o"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#star-half-o"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#star-half-o"><i class="fa fa-star-half-o"></i> fa-star-half-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#star-o"><i class="fa fa-star-o"></i> fa-star-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#subscript"><i class="fa fa-subscript"></i> fa-subscript</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#suitcase"><i class="fa fa-suitcase"></i> fa-suitcase</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sun-o"><i class="fa fa-sun-o"></i> fa-sun-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#superscript"><i class="fa fa-superscript"></i> fa-superscript</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tablet"><i class="fa fa-tablet"></i> fa-tablet</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tachometer"><i class="fa fa-tachometer"></i> fa-tachometer</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tag"><i class="fa fa-tag"></i> fa-tag</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tags"><i class="fa fa-tags"></i> fa-tags</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tasks"><i class="fa fa-tasks"></i> fa-tasks</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#terminal"><i class="fa fa-terminal"></i> fa-terminal</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#thumb-tack"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#thumbs-down"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#thumbs-o-down"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#thumbs-o-up"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#thumbs-up"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#ticket"><i class="fa fa-ticket"></i> fa-ticket</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#times"><i class="fa fa-times"></i> fa-times</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#times-circle"><i class="fa fa-times-circle"></i> fa-times-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#times-circle-o"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tint"><i class="fa fa-tint"></i> fa-tint</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#trash-o"><i class="fa fa-trash-o"></i> fa-trash-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#trophy"><i class="fa fa-trophy"></i> fa-trophy</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#truck"><i class="fa fa-truck"></i> fa-truck</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#umbrella"><i class="fa fa-umbrella"></i> fa-umbrella</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#unlock"><i class="fa fa-unlock"></i> fa-unlock</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#unlock-alt"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#sort"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#upload"><i class="fa fa-upload"></i> fa-upload</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#user"><i class="fa fa-user"></i> fa-user</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#users"><i class="fa fa-users"></i> fa-users</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#video-camera"><i class="fa fa-video-camera"></i> fa-video-camera</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#volume-down"><i class="fa fa-volume-down"></i> fa-volume-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#volume-off"><i class="fa fa-volume-off"></i> fa-volume-off</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#volume-up"><i class="fa fa-volume-up"></i> fa-volume-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#exclamation-triangle"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#wrench"><i class="fa fa-wrench"></i> fa-wrench</a></div>
      			</div><!--/row -->

      			<hr>
      			<!-- FORM CONTROL ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Form Control Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#check-square"><i class="fa fa-check-square"></i> fa-check-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#check-square-o"><i class="fa fa-check-square-o"></i> fa-check-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#circle"><i class="fa fa-circle"></i> fa-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#circle-o"><i class="fa fa-circle-o"></i> fa-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#dot-circle-o"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#square"><i class="fa fa-square"></i> fa-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#square-o"><i class="fa fa-square-o"></i> fa-square-o</a></div>
      			</div><!-- /row -->

      			<hr>
      			<!-- CURRENCY ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Currency Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#btc"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#btc"><i class="fa fa-btc"></i> fa-btc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#jpy"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#usd"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#eur"><i class="fa fa-eur"></i> fa-eur</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#eur"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#gbp"><i class="fa fa-gbp"></i> fa-gbp</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#inr"><i class="fa fa-inr"></i> fa-inr</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#jpy"><i class="fa fa-jpy"></i> fa-jpy</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#krw"><i class="fa fa-krw"></i> fa-krw</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#money"><i class="fa fa-money"></i> fa-money</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#jpy"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#rub"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#rub"><i class="fa fa-rub"></i> fa-rub</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#rub"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#inr"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#try"><i class="fa fa-try"></i> fa-try</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#try"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#usd"><i class="fa fa-usd"></i> fa-usd</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#krw"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#jpy"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></a></div>
      			</div><!-- /row -->

      			<hr>
      			<!-- TEXT EDITOR ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Text Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#align-center"><i class="fa fa-align-center"></i> fa-align-center</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#align-justify"><i class="fa fa-align-justify"></i> fa-align-justify</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#align-left"><i class="fa fa-align-left"></i> fa-align-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#align-right"><i class="fa fa-align-right"></i> fa-align-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#bold"><i class="fa fa-bold"></i> fa-bold</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#link"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chain-broken"><i class="fa fa-chain-broken"></i> fa-chain-broken</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#clipboard"><i class="fa fa-clipboard"></i> fa-clipboard</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#columns"><i class="fa fa-columns"></i> fa-columns</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#files-o"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#scissors"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#outdent"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#eraser"><i class="fa fa-eraser"></i> fa-eraser</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#file"><i class="fa fa-file"></i> fa-file</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#file-o"><i class="fa fa-file-o"></i> fa-file-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#file-text"><i class="fa fa-file-text"></i> fa-file-text</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#file-text-o"><i class="fa fa-file-text-o"></i> fa-file-text-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#files-o"><i class="fa fa-files-o"></i> fa-files-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#floppy-o"><i class="fa fa-floppy-o"></i> fa-floppy-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#font"><i class="fa fa-font"></i> fa-font</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#indent"><i class="fa fa-indent"></i> fa-indent</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#italic"><i class="fa fa-italic"></i> fa-italic</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#link"><i class="fa fa-link"></i> fa-link</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#list"><i class="fa fa-list"></i> fa-list</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#list-alt"><i class="fa fa-list-alt"></i> fa-list-alt</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#list-ol"><i class="fa fa-list-ol"></i> fa-list-ol</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#list-ul"><i class="fa fa-list-ul"></i> fa-list-ul</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#outdent"><i class="fa fa-outdent"></i> fa-outdent</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#paperclip"><i class="fa fa-paperclip"></i> fa-paperclip</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#clipboard"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#repeat"><i class="fa fa-repeat"></i> fa-repeat</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#undo"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#repeat"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#floppy-o"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#scissors"><i class="fa fa-scissors"></i> fa-scissors</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#strikethrough"><i class="fa fa-strikethrough"></i> fa-strikethrough</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#table"><i class="fa fa-table"></i> fa-table</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#text-height"><i class="fa fa-text-height"></i> fa-text-height</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#text-width"><i class="fa fa-text-width"></i> fa-text-width</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#th"><i class="fa fa-th"></i> fa-th</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#th-large"><i class="fa fa-th-large"></i> fa-th-large</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#th-list"><i class="fa fa-th-list"></i> fa-th-list</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#underline"><i class="fa fa-underline"></i> fa-underline</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#undo"><i class="fa fa-undo"></i> fa-undo</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chain-broken"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></a></div>
      			</div><!-- /row -->

      			<hr>
      			<!-- DIRECTIONAL ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Directional Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-double-down"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-double-left"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-double-right"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-double-up"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-down"><i class="fa fa-angle-down"></i> fa-angle-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-left"><i class="fa fa-angle-left"></i> fa-angle-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-right"><i class="fa fa-angle-right"></i> fa-angle-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#angle-up"><i class="fa fa-angle-up"></i> fa-angle-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-down"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-left"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-o-down"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-o-left"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-o-right"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-o-up"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-right"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-circle-up"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-down"><i class="fa fa-arrow-down"></i> fa-arrow-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-left"><i class="fa fa-arrow-left"></i> fa-arrow-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-right"><i class="fa fa-arrow-right"></i> fa-arrow-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrow-up"><i class="fa fa-arrow-up"></i> fa-arrow-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrows"><i class="fa fa-arrows"></i> fa-arrows</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrows-alt"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrows-h"><i class="fa fa-arrows-h"></i> fa-arrows-h</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrows-v"><i class="fa fa-arrows-v"></i> fa-arrows-v</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-down"><i class="fa fa-caret-down"></i> fa-caret-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-left"><i class="fa fa-caret-left"></i> fa-caret-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-right"><i class="fa fa-caret-right"></i> fa-caret-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-down"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-left"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-right"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-up"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-up"><i class="fa fa-caret-up"></i> fa-caret-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-circle-down"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-circle-left"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-circle-right"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-circle-up"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-down"><i class="fa fa-chevron-down"></i> fa-chevron-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-left"><i class="fa fa-chevron-left"></i> fa-chevron-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-right"><i class="fa fa-chevron-right"></i> fa-chevron-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#chevron-up"><i class="fa fa-chevron-up"></i> fa-chevron-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#hand-o-down"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#hand-o-left"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#hand-o-right"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#hand-o-up"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#long-arrow-down"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#long-arrow-left"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#long-arrow-right"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#long-arrow-up"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a></div>


      			</div><!-- /row -->


      			<hr>
      			<!-- VIDEO PLAYER ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Video Player Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#arrows-alt"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#backward"><i class="fa fa-backward"></i> fa-backward</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#compress"><i class="fa fa-compress"></i> fa-compress</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#eject"><i class="fa fa-eject"></i> fa-eject</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#expand"><i class="fa fa-expand"></i> fa-expand</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#fast-backward"><i class="fa fa-fast-backward"></i> fa-fast-backward</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#fast-forward"><i class="fa fa-fast-forward"></i> fa-fast-forward</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#forward"><i class="fa fa-forward"></i> fa-forward</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pause"><i class="fa fa-pause"></i> fa-pause</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#play"><i class="fa fa-play"></i> fa-play</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#play-circle"><i class="fa fa-play-circle"></i> fa-play-circle</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#play-circle-o"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#step-backward"><i class="fa fa-step-backward"></i> fa-step-backward</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#step-forward"><i class="fa fa-step-forward"></i> fa-step-forward</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#stop"><i class="fa fa-stop"></i> fa-stop</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#youtube-play"><i class="fa fa-youtube-play"></i> fa-youtube-play</a></div>
      			</div><!-- /row -->

       			<hr>
      			<!-- BRAND ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Brand Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#adn"><i class="fa fa-adn"></i> fa-adn</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#android"><i class="fa fa-android"></i> fa-android</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#apple"><i class="fa fa-apple"></i> fa-apple</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#bitbucket"><i class="fa fa-bitbucket"></i> fa-bitbucket</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#bitbucket-square"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#btc"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#btc"><i class="fa fa-btc"></i> fa-btc</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#css3"><i class="fa fa-css3"></i> fa-css3</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#dribbble"><i class="fa fa-dribbble"></i> fa-dribbble</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#dropbox"><i class="fa fa-dropbox"></i> fa-dropbox</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#facebook"><i class="fa fa-facebook"></i> fa-facebook</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#facebook-square"><i class="fa fa-facebook-square"></i> fa-facebook-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#flickr"><i class="fa fa-flickr"></i> fa-flickr</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#foursquare"><i class="fa fa-foursquare"></i> fa-foursquare</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#github"><i class="fa fa-github"></i> fa-github</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#github-alt"><i class="fa fa-github-alt"></i> fa-github-alt</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#github-square"><i class="fa fa-github-square"></i> fa-github-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#gittip"><i class="fa fa-gittip"></i> fa-gittip</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#google-plus"><i class="fa fa-google-plus"></i> fa-google-plus</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#google-plus-square"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#html5"><i class="fa fa-html5"></i> fa-html5</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#instagram"><i class="fa fa-instagram"></i> fa-instagram</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#linkedin"><i class="fa fa-linkedin"></i> fa-linkedin</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#linkedin-square"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#linux"><i class="fa fa-linux"></i> fa-linux</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#maxcdn"><i class="fa fa-maxcdn"></i> fa-maxcdn</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pagelines"><i class="fa fa-pagelines"></i> fa-pagelines</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pinterest"><i class="fa fa-pinterest"></i> fa-pinterest</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#pinterest-square"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#renren"><i class="fa fa-renren"></i> fa-renren</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#skype"><i class="fa fa-skype"></i> fa-skype</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#stack-exchange"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#stack-overflow"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#trello"><i class="fa fa-trello"></i> fa-trello</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tumblr"><i class="fa fa-tumblr"></i> fa-tumblr</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#tumblr-square"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#twitter"><i class="fa fa-twitter"></i> fa-twitter</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#twitter-square"><i class="fa fa-twitter-square"></i> fa-twitter-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#vimeo-square"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#vk"><i class="fa fa-vk"></i> fa-vk</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#weibo"><i class="fa fa-weibo"></i> fa-weibo</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#windows"><i class="fa fa-windows"></i> fa-windows</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#xing"><i class="fa fa-xing"></i> fa-xing</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#xing-square"><i class="fa fa-xing-square"></i> fa-xing-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#youtube"><i class="fa fa-youtube"></i> fa-youtube</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#youtube-play"><i class="fa fa-youtube-play"></i> fa-youtube-play</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#youtube-square"><i class="fa fa-youtube-square"></i> fa-youtube-square</a></div>
      			</div><!-- /row -->

      			<hr>
      			<!-- MEDICAL ICONS -->
      			<h4><i class="fa fa-angle-right"></i> Medical Icons</h4>
      			<div class="fontawesome-list row">
                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#ambulance"><i class="fa fa-ambulance"></i> fa-ambulance</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#h-square"><i class="fa fa-h-square"></i> fa-h-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#hospital-o"><i class="fa fa-hospital-o"></i> fa-hospital-o</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#medkit"><i class="fa fa-medkit"></i> fa-medkit</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#stethoscope"><i class="fa fa-stethoscope"></i> fa-stethoscope</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#user-md"><i class="fa fa-user-md"></i> fa-user-md</a></div>

                  <div class="fa-hover col-md-3 col-sm-4"><a href="{{ url('/font_awesome')}}#wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>
      			</div><!-- /row -->

          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="{{ url('/font_awesome')}}#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jjquery-1.8.3.min.html"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/font_awesome')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:55:00 GMT -->
</html>
