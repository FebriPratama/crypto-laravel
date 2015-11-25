@extends('templates.member')
@section('head')
  <!-- DATA TABLES -->


@stop
@section('content')      

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Error Page
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">

                  <div class="box-header">
                    @if(isset($message))

                        <div class="alert alert-warning alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                          {{ $message }}
                        </div>

                    @endif
                    @if(Session::has('message'))
                      <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>{{ Session::get('message') }} !</strong>
                      </div>
                    @elseif(Session::has('error'))
                      <div class="alert alert-warning alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>{{ Session::get('error') }} !</strong>
                      </div>              
                    @endif
                  </div>
                  <div class="box-body">
                    
                    <a href="{{ URL::to('member') }}" id="fb" class="sync btn btn-success col-md-offset-5 col-xs-offset-5 btn-disable">Back to Dashboard</a>
                    
                    <hr>  
                    
                  </div><!-- /.box-body -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@stop
