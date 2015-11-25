@extends('templates.member')

@section('head')
  {{ HTML::style('plugins/iCheck/flat/blue.css') }}
  {{ HTML::style('plugins/morris/morris.css') }}
@stop
@section('content')
<!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> -->
      <li class="active">Dashboard</li>
    </ol>
  </section>
   
  <!-- Main content -->
  <section class="content" style="padding:60px 10px 0 10px ">
    <div class="container">

    <div class="row" id="chat_window_1">
        <div class="col-xs-12 col-md-12">
          <div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat Group</h3>
                    </div>
                </div>
                <div class="panel-body msg_container_base" id="showchat">

                    @if(count($messages) < 1)

                        <h2>No Messages Found</h2>

                    @else

                        @foreach($messages as $m)

                            @if($m->m_user_id == Auth::user()->get()->user_id)

                                <div class="row msg_container base_receive">
                                    <div class="col-md-1 col-xs-1 avatar">
                                       {{ $m->user_fullname }}
                                    </div>
                                    <div class="col-md-11 col-xs-11">
                                        <div class="messages msg_receive">
                                            <p>{{ str_replace(':', ' ', strtolower(Kripto::decode($m->m_text))) }}</p>
                                        </div>
                                    </div>
                                </div>

                            @else

                                <div class="row msg_container base_sent">
                                    <div class="col-md-11 col-xs-11">
                                        <div class="messages msg_sent">
                                            <p>{{ str_replace(':', ' ', strtolower(Kripto::decode($m->m_text))) }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-xs-1 avatar">
                                        {{ $m->user_fullname }}
                                    </div>
                                </div>

                            @endif                           
                            

                        @endforeach

                    @endif

                </div>
                <div class="panel-footer">
                    <form id="chat">
                        <div class="input-group">
                            <input id="btn-input" type="text" id="pesan" name="pesan" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                            <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
        </div>
        </div>
    </div>
  </div>
  </section><!-- /.content -->
@stop

@section('ext')
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{ HTML::script('js/pages/dashboard2.js') }}

    <script type="text/javascript">

        var socket = io.connect('http://nodejs-argapratomo.rhcloud.com:8000');
        
        socket.on("status", function(msg){
             console.log(msg);
        });
        
        toBot();

        socket.on("getChat", function(msg){

            if($('#chat').find('h2').length){
                
              $('#chat').find('h2').remove;

            } 

            if(msg.id == '{{ Auth::user()->get()->user_id }}'){

                data = '<div class="row msg_container base_receive">'
                          +'<div class="col-md-1 col-xs-1 avatar">'
                            +msg.name
                          +'</div>'
                          +'<div class="col-md-11 col-xs-11">'
                              +'<div class="messages msg_receive">'
                                 +'<p>'+msg.message+'</p>'
                             +'</div>'
                          +'</div>'
                      +'</div>';

            }else{

                data = '<div class="row msg_container base_receive">'
                          +'<div class="col-md-11 col-xs-11">'
                              +'<div class="messages msg_receive">'
                                 +'<p>'+msg.message+'</p>'
                             +'</div>'
                          +'</div>'
                          +'<div class="col-md-1 col-xs-1 avatar">'
                            +msg.name
                          +'</div>'
                      +'</div>';

            }

            $("#showchat").append(data);
            toBot();

        });

      function toBot() {

        var wtf    = $('#showchat');
        var height = wtf[0].scrollHeight;
        wtf.scrollTop(height);

      };

      $("#chat").submit(function(){

            //socket.emit("sendChat", { id : '{{ Auth::user()->get()->user_id }}', message : $("#pesan").val() });

                var m = $("#pesan").val();
                var data = $("#chat").serialize();
                $(this).find('input').attr("disabled", true);
                $(this).find('button').html('Sending . .').attr("disabled", true);

                $.ajax({

                      type: "POST",

                      url: '{{ URL::to('api/chat') }}',

                      data: data, 

                      dataType : 'json',

                      cache : false,

                      error: function (xhr, textStatus, errorThrown) {

                          $("#chat").find('button').html('Retry').attr("disabled", false);
                          $("#chat").find('input').attr("disabled", false);
                          $("#chat").find('input').focus();

                      },

                      success : function(hasil){    

                          socket.emit("sendChat", { id : '{{ Auth::user()->get()->user_id }}', name : '{{ Auth::user()->get()->user_fullname }}', message : hasil.m_text });
                          
                          $("#chat").find('button').html('Send').attr("disabled", false);
                          $("#chat").find('input').attr("disabled", false);
                          $("#chat").trigger("reset");

                      }
                    
                });
            

            return false;
      });

    </script>

@stop