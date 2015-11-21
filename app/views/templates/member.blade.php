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
              <li><a href=" {{ URL::to(Auth::user()->get()->user_permalink) }} " target="_blank"><i class='ion ion-ios-world-outline'></i> &nbsp view site</a></li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ URL::asset('img/user/profile/'.Auth::user()->get()->user_img_profile) }}" onerror="imgError(this)" class="user-image" alt="{{ Auth::user()->get()->user_fullname }}"/>
                  <span class="hidden-xs">{{ Auth::user()->get()->user_fullname }}</span>
                </a>
                <ul class="dropdown-menu" role="menu"  style="background:#1E282C;">
                  <li><a href="{{ URL::to('member/profile') }}">Account</a></li>
                  <li><a href="#">Uprade</a></li>
                  <li><a href="#">Install</a></li>
                  <li><a href="{{ URL::to('member/logout') }}">Logout</a></li>
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
            
            <!-- <li class="active header">Navigation</li> -->

            <li class="active treeview">
              <a href="{{ URL::to('member') }}">
                <i class="ion ion-ios-home-outline"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('member/channel') }}">
                <i class="ion ion-ios-color-filter-outline"></i> <span>Channel</span>
              </a>
            </li>
            <!--<li class="treeview">
              <a href="#">
                <i class="ion ion-ios-color-filter-outline"></i> <span>Channel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('member/channel/facebook') }}"><i class="fa fa-circle-o"></i> Facebook Page</a></li>
                <li><a href="{{ URL::to('member/channel/twitter') }}"><i class="fa fa-circle-o"></i> Twitter Account</a></li>
                <li><a href="{{ URL::to('member/channel/instagram') }}"><i class="fa fa-circle-o"></i> Instagram Account</a></li>
              </ul>
            </li>-->

            <li class="treeview">
              <a href="{{ URL::to('member/sales') }}">
                <i class="ion ion-ios-cart-outline"></i> <span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('member/sales/unpaid') }}"><i class="fa fa-circle-o"></i> Unpaid</a></li>
                <li><a href="{{ URL::to('member/sales/paid') }}"><i class="fa fa-circle-o"></i> Paid</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="{{ URL::to('member/customer') }}">
                <i class="ion ion-ios-people-outline"></i> <span>Customer</span>
              </a>
            </li>


            <li class="treeview">
              <a href="{{ URL::to('member/product') }}">
                <i class="ion ion-bag"></i> <span>Product</span>
              </a>
            </li>            
            <!--<li class="treeview">
              <a href="#">
                <i class="ion ion-ios-navigate-outline"></i> <span>Delivery</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('member/pengiriman') }}"><i class="fa fa-circle-o"></i> Check Ongkos Kirim</a></li>
                <li><a href="{{ URL::to('member/pengiriman/resi') }}"><i class="fa fa-circle-o"></i> Check Resi</a></li>
              </ul>
            </li>-->
            <li class="treeview">
              <a href="#">
                <i class="ion ion-ios-world-outline"></i> <span>Website</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('member/website/setting') }}"><i class="fa fa-circle-o"></i> Setting</a></li>
                <li><a href="{{ URL::to('member/website/template') }}"><i class="fa fa-circle-o"></i> Template</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="ion ion-ios-briefcase-outline"></i> <span>Apps</span>
                <!--<small class="label pull-right bg-red">3</small>-->
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('member/bank') }}"><i class="fa fa-circle-o"></i> Transaksi</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

         @if(Session::has('message') || Session::has('error') || $errors->any())

          <div id="alertmodal" class="modal fade bs-example-modal-lg">

              <div class="modal-dialog">
                <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title">Notice Dialog</h4>
                      </div>

                      <div class="modal-body">
                        @if(Session::has('message'))
                          <div class="alert-modal alert-success fade in" role="alert">
                            <strong>{{ Session::get('message') }} !</strong>
                          </div>
                        @elseif(Session::has('error'))
                          <div class="alert-modal alert-warning fade in" role="alert">
                            <strong>{{ Session::get('error') }} !</strong>
                          </div>
                        @endif
                        @if ($errors->any())
                        {{ implode('', $errors->all('<div class="alert-modal alert-danger fade in" role="alert">
                        <strong>:message!</strong></div>')) }}
                        @endif            
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                      </div>  

                </div>
              </div>
          </div>

        @endif

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

    <script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>

    <script type="text/javascript">

        @if(Session::has('message') || Session::has('error') || $errors->any())

          $(window).load(function(){
              $('#alertmodal').modal('show');
          });

        @endif

        function imgError(image) {
            image.onerror = "";
            image.src = "{{ URL::asset('img/avatar5.png') }}";
            return true;
        }

        var socket = io.connect('http://nodejs-argapratomo.rhcloud.com:8000');

        //socket.on('connect', function(data){
        //    socket.emit('subscribe', {channel:'score.update'});
        //});
 
            socket.on("status", function(msg){
                   console.log(msg);
              });

            socket.on("getChat", function(msg){
                   console.log(msg);
                   $("#showchat").append("<li>"+msg+"</li>");
              });

            socket.on('score.update', function (data) {
                //Do something with data
                console.log(data);

             });

             socket.on('channel.chat', function (data) {
                //Do something with data
                console.log(data);
                
             });

              $(".btn-disable").click(function(){
                $(this).attr('disabled',true).text("Loading . .");
              });

              $("#notif-start").click(function(){
                  
                  $("#notif-list").html('<li><a href="#">Loading Notifications . . .</a></li>');

                  $.ajax({
                      type: "POST",
                      url: '{{ URL::to('api/user/'.Auth::user()->get()->user_id) }}/notif',
                      dataType : 'json',
                      cache : false,
                      success : function(hasil){

                        $("#notif-stat").hide();
                        $("#notif-list").html('');

                        $.each(hasil, function(i,e) {

                          $("#notif-list").append('<li><a href="#">'+e.notif_type_body+'</a></li>');

                        });

                      } 

                  });

              });

    </script>

    @yield('ext')

    <script type="text/javascript">


        $(".alert").click(function()
        {
            $(this).hide();
        });
        
        $(".ajax-load").fadeOut();

        $(".modal").on('hidden.bs.modal', function () {

          $(this).data('bs.modal', null);

        });

        $( document ).ajaxError(function( event, jqxhr, settings, exception ) {

          $('#modal-general').modal('hide');
          $('.alert').removeClass('alert-danger').removeClass('alert-success').addClass('alert-warning').slideDown().find('#title').html('Connection Problem');
          $('.alert').find('#reason').html("Failed fetching data from server, please check your internet connection and reload this page, if probem occurs frequently please contact support."); 

        });

        /*$(document).ajaxSend(function(event, request, settings) {
            $('.se-pre-con').show();
        });

        $(document).ajaxComplete(function(event, request, settings) {
            $('.se-pre-con').hide();
        });*/

        $.ajaxSetup({

            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }

        });
    </script>

  </body>
</html>