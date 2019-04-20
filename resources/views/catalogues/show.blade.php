@extends('layouts.app')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href = "/catalogues" class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
    <h1><center>Catalogue Year <strong>{{$catalogue->year}}</strong></center></h1>
    <!--<div class="panel-body">
                   <a href ="/departments" class = 'btn btn-primary'>View Departments</a> -->
    <div class = "well">
    <h3><i class="fa fa-desktop" style="font-size:25px;color:red"></i>  <a href = "/departments">School of Information Technology and Computing</a></h3>
    </div>
    <div class = "well">
    <h3><i class="fa fa-money" style="font-size:25px;color:green"></i></i>  <a href = "">School of Business and Entrepreneurship</a></h3>
    </div>
    <div class = "well">
    <h3><i class="fa fa-balance-scale" aria-hidden="true"></i></i></i>  <a href = "">School of Law</a></h3>
    </div>


@endsection