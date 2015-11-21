<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vendpad | Dashboard</title>
        @yield('title')
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Ionicons 2.0.0 -->
        {{ HTML::style('css/bootstrap.min.css') }}

        {{ HTML::style('css/font-awesome.min.css') }}

        {{ HTML::style('css/ionicons.min.css') }}           
        <!-- Theme style -->
         @yield('head')

        {{ HTML::style('css/AdminLTE.css') }}

        {{ HTML::style('css/master.css') }}

        {{ HTML::style('css/skins/_all-skins.css') }}

        {{ HTML::style('css/skins/skin-red.css') }}
       
        <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">

    <div class="se-pre-con"></div>
    
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL::to('admin'.$pre.'') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>V</b>P</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="{{ URL::asset('img/config/logo.png') }}"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-fixed-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ URL::asset('img/user/profile/'.Auth::admin()->get()->user_img_profile) }}" class="user-image" alt="{{ Auth::admin()->get()->user_fullname }}"/>
                  <span class="hidden-xs">{{ Auth::admin()->get()->user_fullname }}</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ URL::to('admin'.$pre.'/profile') }}">Account</a></li>
                  <li><a href="#">Uprade</a></li>
                  <li><a href="#">Install</a></li>
                  <li class="divider"></li>
                  <li><a href="{{ URL::to('admin'.$pre.'/logout') }}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active header">Navigation</li>
            <li class="active treeview">
              <a href="{{ URL::to('admin'.$pre) }}">
                <i class="ion ion-ios-home-outline"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('admin'.$pre.'/member') }}">
                <i class="ion ion-ios-people-outline"></i> <span>Member</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('admin'.$pre.'/page') }}">
                <i class="ion ion-ios-bookmarks-outline"></i> <span>Page</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('admin'.$pre.'/newsletter') }}">
                <i class="ion ion-ios-paperplane-outline"></i> <span>Newsletter</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('admin'.$pre.'/voucher') }}">
                <i class="ion ion-ios-pricetag-outline"></i> <span>Voucher</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('admin'.$pre.'/package') }}">
                <i class="ion ion-ios-flask-outline"></i> <span>Package</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="ion ion-ios-settings"></i> <span>Config</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin'.$pre.'/notification') }}"><i class="fa fa-circle-o"></i> User Notification</a></li>
                <li><a href="{{ URL::to('admin'.$pre.'/config/general') }}"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="{{ URL::to('admin'.$pre.'/config/status') }}"><i class="fa fa-circle-o"></i> System Status</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div><!-- /.content-wrapper -->

    </div><!-- ./wrapper -->

    <div id="modal-general" class="modal fade">
        
    </div>
    <!-- jQuery 2.1.4 -->
    {{ HTML::script('plugins/jQuery/jQuery-2.1.4.min.js') }}
    <!-- jQuery UI 1.11.2 -->
    {{ HTML::script('plugins/jQueryUI/jquery-ui-1.10.3.min.js') }}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->

    {{ HTML::script('js/bootstrap.min.js') }}

    <!-- FastClick -->
    {{ HTML::script('plugins/fastclick/fastclick.min.js') }}
    
    <!-- Sparkline -->
    {{ HTML::script('plugins/sparkline/jquery.sparkline.min.js') }}
    <!-- SlimScroll 1.3.0 -->
    {{ HTML::script('plugins/slimScroll/jquery.slimscroll.min.js') }}
    <!-- ChartJS 1.0.1 -->
    {{ HTML::script('plugins/chartjs/Chart.min.js') }}
    <!-- AdminLTE App -->
    {{ HTML::script('js/app.min.js') }}
    <!-- AdminLTE for demo purposes -->
    {{ HTML::script('js/demo.js') }}

    @yield('ext')

    <script type="text/javascript">
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
          });
        $(".modal").on('hidden.bs.modal', function () {

          $(this).data('bs.modal', null);

        });

        $.ajaxSetup({

            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }

        });
    </script>

  </body>
</html>