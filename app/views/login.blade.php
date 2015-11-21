<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page | Kripto123</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Theme style -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <!-- iCheck -->
        {{ HTML::style('plugins/iCheck/square/blue.css') }}

        {{ HTML::style('css/font-awesome.min.css') }}

        {{ HTML::style('css/bootstrap.min.css') }}
        <!-- Theme style -->
        {{ HTML::style('css/AdminLTE.css') }}

    <meta name="_token" content="{{ csrf_token() }}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ URL::to('/') }}" style="color:#000">Tugas Akhir Kriptografi</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body" style="border:solid 1px #CECECE ; -webkit-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.28);
-moz-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.28);
box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.28);">
            
        <div id="modal-alert" class="alert alert-dismissable" style="position:relative">
          <h4><i class="icon fa  fa-exclamation"></i> <span id="title"></span></h4>
          Message : <span id="reason"></span>
        </div>  

        <p class="login-box-msg">Sign in to start your session</p>
        <form id="login">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="rememberme"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" id="tombol_signin" style="background:#676767; border:none">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <hr>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    {{ HTML::script('plugins/jQuery/jQuery-2.1.4.min.js') }}
    <!-- jQuery UI 1.11.2 -->
    <!-- Bootstrap 3.3.2 JS -->

    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('plugins/iCheck/icheck.min.js') }}
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
      $('#modal-alert').hide();
      $('#login').submit(function()
      {
                console.log('Loging in . . ');
                $(this).find('button').attr("disabled",true).html("loading..");

                $('#modal-alert').slideUp();

                    $.ajax({

                          type: "POST",

                          url: '{{ URL::to('api/login') }}',

                          data: $(this).serialize(), 

                          dataType : 'json',

                          cache : false,

                          error: function (xhr, textStatus, errorThrown) {

                              if (textStatus == 'timeout') {

                                    $('#login').find('button').attr("disabled",false).html("sign in");
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html('Internet Connection unstable, please check your connection'); 

                              }

                              if (xhr.status == 500) {

                                    $('#login').find('button').attr("disabled",false).html("sign in");;
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html('Server is in Maintenance'); 


                              } else {

                                    $('#login').find('button').attr("disabled",false).html("sign in");;
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html('Opps, something went wrong. Please try again later'); 

                              
                              }

                          },
                          success : function(hasil)
                          {               

                                $.each(hasil, function(i,e) 
                                {

                                  if(e.status === '1'){  

                                    $('#modal-alert').removeClass('alert-danger').addClass(e.alert).slideDown().find('#title').html('Operation Success');
                                    $('#modal-alert').find('#reason').html(e.message); 
                                    
                                     window.location = "{{ URL::to('member') }}";
                                    
                                    //test revisi , testing push ke 3

                                    /*setTimeout(function () {
                                        window.location = "{{ URL::to('member') }}";
                                    }, 3000);*/
                                    
                                  }else if(e.status=='0'){
                                    $('#login').find('button').attr("disabled",false).html("sign in");;
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html(e.message); 

                                  }else{
                                    $('#login').find('button').attr("disabled",false).html("sign in");;
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html(e); 
                                  }

                                });
                          
                          }
                        
                    });
              
              return false;

          });
        $.ajaxSetup({

            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }

        });
    </script>
  </body>
</html>