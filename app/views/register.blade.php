<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register Page | Vendpad</title>
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
    <div class="register-box">
      <div class="register-logo">
        <a href="{{ URL::to('/') }}"><b>Krip</b>TO</a>
      </div>

      <div id="modal-alert" class="alert alert-dismissable">
        <h4><i class="icon fa  fa-exclamation"></i> <span id="title"></span></h4>
        Message : <span id="reason"></span>
      </div>  

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form id="register">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="name" placeholder="Full name"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pswd" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" id="term" name="term" value="true"> I agree to the <a href="#">terms</a>
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" id="btn-reg" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>     

        <a href="{{ URL::to('login') }}" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
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
      $('#register').submit(function(){
                $(this).find('button').attr("disabled",true);
                $('#modal-alert').slideUp();

                    $.ajax({

                          type: "POST",

                          url: '{{ URL::to('api/user') }}',

                          data: $(this).serialize(), 

                          dataType : 'json',

                          cache : false,
                          
                          error: function (xhr, textStatus, errorThrown) {

                              if (textStatus == 'timeout') {

                                    $('#register').find('button').attr("disabled",false);
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html('Internet Connection unstable, please check your connection'); 

                              }

                              if (xhr.status == 500) {

                                    $('#register').find('button').attr("disabled",false);
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html('Server is in Maintenance'); 


                              } else {

                                    $('#login').find('button').attr("disabled",false);
                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html('Opps, something went wrong. Please try again later'); 

                              
                              }

                          },
                          success : function(hasil){                    
                             

                                $.each(hasil, function(i,e) {

                                  if(e.status === '1'){  

                                    $('#modal-alert').removeClass('alert-danger').addClass(e.alert).slideDown().find('#title').html('Operation Success');
                                    $('#modal-alert').find('#reason').html(e.message); 

                                    setTimeout(function () {
                                        window.location = "{{ URL::to('member') }}";
                                    }, 3000);

                                  }else{
                                    $('#register').find('button').attr("disabled",false);
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