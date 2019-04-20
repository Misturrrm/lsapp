@extends('layouts.app')

@section('content')
<a href = "/dashboard" class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
<h1 align = "center"><strong>Catalogues</strong></h1>

    @if (count($catalogues) > 0 )
        @foreach($catalogues as $catalogue)
            <div class = "well">
            <h3><span class="glyphicon glyphicon-book"></span> <a href = "/catalogues/{{$catalogue->year}}">{{$catalogue->year}}</a></h3>
           @if(Auth::user()->roles == '1')
            {!!Form::open(['action'=> ['CataloguesController@destroy', $catalogue->year], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('X',['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
           @endif
            </div>
        

        @endforeach
    @else

    <h3> No Catalogues Found </h3>


    @endif

@endsection