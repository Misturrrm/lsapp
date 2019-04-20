@extends('layouts.app')
<!--<?php
$dbhost = '127.0.0.1';
$dbusername = 'root';
$dbpassword = 'sadada619';
$dbname = 'lsapp';

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_errno($connection)){
	print ('Failed to connect to db, because of the error "' . mysqli_connect_error() . '"');
}

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
$query = "SELECT  dept_name from department";

$result_1 = mysqli_query($connection, $query);
if (!$result_1) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}

?> -->
@section('content')


@if(Auth::user()->roles == '1')
<a href = "/dashboard" class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
    <h1><strong>Create Catalog</strong></h1>
    {!! Form::open(['action'=> 'CataloguesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{form::label('year', 'Year' )}}
            {{Form::text('year', '',['class' => 'form-control', 'placeholder'=> 'Year'])}}
         </div>
         {{Form::submit('submit', ['class'=>'btn btn-primary'])}}


    {!! Form::close() !!}
          <!--<div class = "form-group">
            {{form::label('admin_id', 'Admin_id' )}}
            {{Form::text('admin_id', '',['class' => 'form-control', 'placeholder'=> 'Admin_id'])}}
         </div> 
         

         </div>
         <div class = "form-group">
            <label for = "Department"
         </div>
         -->

         {{--  <div class = "form-group">
            {{form::label('dept_name', 'Dept_name' )}}
            {{Form::text('dept_name', '',['class' => 'form-control', 'placeholder'=> 'Dept_name'])}}
         </div>  --}}
         {{--  <strong>Department</strong>
         <div class = "form-group">
         <select name = "dept_name" id="">
            <option value = "">Information Systems</option>
            <option value = "">Computer Science</option>
            <option value = 

"">Software Engineering</option>
        </select>  --}}
       
    @endif
   
@endsection