@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                You are logged in as <strong>Admin</strong>
                <div class="panel-body">
                   <a href ="/catalogues/create" class = 'btn btn-primary'>Create Catalogue</a>
                   <a href = "/catalogues" class = "btn btn-success">View Catalogues</a>
                   <a href = "" class = "btn btn-danger">View Student Records</a>

                   </div>
            </div>
        </div>
    </div>
</div>
@endsection
