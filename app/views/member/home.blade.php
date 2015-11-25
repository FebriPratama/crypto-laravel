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

                            @if()

                            @else

                            @endif
                            
                            $m->m_text

                        @endforeach

                    @endif
                    <div class="row msg_container base_sent">
                        <div class="col-md-11 col-xs-11">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-1 col-xs-1 avatar">
                            Jojon
                        </div>
                    </div>

                    <div class="row msg_container base_receive">
                        <div class="col-md-1 col-xs-1 avatar">
                           Jojon
                        </div>
                        <div class="col-md-11 col-xs-11">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <form id="chat">
                        <div class="input-group">
                            <input id="btn-input" type="text" id="pesan" class="form-control input-sm chat_input" placeholder="Write your message here..." />
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

        socket.on("getChat", function(msg){

            if(msg.name == '{{ Auth::user()->get()->user_fullname }}'){


            }else{


            }

             $("#showchat").append("<li>"+msg+"</li>");
        });

        socket.on('score.update', function (data) {
            //Do something with data
            console.log('Score updated: ');
         });

      $("#chat").submit(function(){

            //socket.emit("sendChat", { name : '{{ Auth::user()->get()->user_fullname }}', message : $("#pesan").val() });

            
                $.ajax({

                      type: "POST",

                      url: '{{ URL::to('chat') }}',

                      data: $("#chat").serialize(), 

                      dataType : 'json',

                      cache : false,

                      success : function(hasil){    

                            socket.emit("sendChat", { name : '{{ Auth::user()->get()->user_fullname }}', message : $("#pesan").val() });

                            console.log("terkirim");
                      
                      }
                    
                });
            

            return false;
      });

    </script>

@stop