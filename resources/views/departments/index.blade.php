@extends('layouts.app')

@section('content')
    @foreach ($catalogues as $catalogue)
    <a href = "/catalogues/{{$catalogue->year}}" class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
    @endforeach
    <p></p>
    <p></p>
    @if (count($catalogues) > 0 )
        @foreach ($catalogues as $catalogue)
            @if (count($departments) > 0 )
                @foreach($departments as $department)
                <!--<h1><center>Catalogue Year <strong>{{$catalogue->year}}</strong></center></h1>-->
                
                    <div class = "well">
                    <h3><a href = "/catalogues/{{$catalogue->year}}/{{$department->dept_name}}">{{$department->dept_name}}</a></h3> 
            
                @endforeach

        
            @endif
        @endforeach
    @endif
@endsection