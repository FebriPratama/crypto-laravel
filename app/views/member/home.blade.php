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

          

        </section><!-- /.content -->
@stop

@section('ext')
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{ HTML::script('js/pages/dashboard2.js') }}
    
@stop