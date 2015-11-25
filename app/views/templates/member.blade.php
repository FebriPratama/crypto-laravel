<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Kriptografi | Dashboard</title>
        @yield('title')
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Ionicons 2.0.0 -->
        {{ HTML::style('css/bootstrap.min.css') }}

        {{ HTML::style('css/font-awesome.min.css') }}

        {{ HTML::style('css/ionicons.min.css') }}           
        <!-- Theme style -->
         @yield('head')

        {{ HTML::style('css/master.css') }}

        {{ HTML::style('css/chat.css') }}

        {{ HTML::style('css/AdminLTE.css') }}

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

  <body class="skin-blue sidebar-collapse sidebar-mini">
    
    @yield('body') 

    <!-- <div class="se-pre-con">
      <div class="se-pre-container">
        <img src="{{ URL::asset('img/config/Preloader_10.gif') }}">
      </div>
    </div> -->
    <!-- <div class="ajax-load"></div> -->
    
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL::to('member') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>K</b>P</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Kriptografi</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-fixed-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ URL::asset('img/'.Auth::user()->get()->user_img_profile) }}" onerror="imgError(this)" class="user-image" alt="{{ Auth::user()->get()->user_fullname }}"/>
                  <span class="hidden-xs">{{ Auth::user()->get()->user_fullname }}</span>
                </a>
                <ul class="dropdown-menu" role="menu"  style="background:#1E282C;">
                  <li><a href="{{ URL::to('member/logout') }}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>     

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        @yield('content')

      </div><!-- /.content-wrapper -->

    </div><!-- ./wrapper -->

    <div id="modal-general" class="modal fade bs-example-modal-lg">

       

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

    {{ HTML::script('js/chat.js') }}

    <script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>

    @yield('ext')

    <script type="text/javascript">
        function imgError(image) {
            image.onerror = "";
            image.src = "{{ URL::asset('img/avatar5.png') }}";
            return true;
        }

        $.ajaxSetup({

            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }

        });
    </script>

  </body>
</html>