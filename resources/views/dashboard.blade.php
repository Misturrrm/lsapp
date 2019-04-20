@extends('layouts.app')
@section('content')
@if(Auth::user()->roles == '1')
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
                    <a href = "/userdetails/studentdetails" class = "btn btn-danger">View User Records</a>
                     <a href ="/studentrecords" class = 'btn btn-info'>View Student Records</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif(Auth::user()->roles == '0' && Auth::user()->major_name == 'Computer Science')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                    You are logged in as <strong> Student</strong> majoring Computer Science!
                    <div class="panel-body">
                    <a href = "/catalogues" class = "btn btn-success">View Catalogues</a>
                    <a href = "gpa/gpacalculator.html" class = "btn btn-primary">Calculate CGPA</a>
                
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif(Auth::user()->roles == '0' && Auth::user()->major_name == 'Software Engineering')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                    You are logged in as <strong> Student</strong> majoring in Software Engineering!
                    <div class="panel-body">
                    <a href = "/catalogues" class = "btn btn-success">View Catalogues</a>
                    <a href = "gpa/gpacalculator.html" class = "btn btn-primary">Calculate CGPA</a>
                
                    </div>
                </div>
            </div>
        </div>
    </div>


@elseif(Auth::user()->roles == '2')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Advising Dashboard</div>

                    <div class="panel-body">
                    You are logged in as <strong>Academic Advisor</strong>
                    <div class="panel-body">
                    <a href ="/studentrecords" class = 'btn btn-info'>View Student Records</a>
                    <a href = "/catalogues" class = "btn btn-success">View Catalogues</a>
                    <a href = "gpa/gpacalculator.html" class = "btn btn-primary">Calculate CGPA</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@elseif(Auth::user()->roles == '3')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Instructor Dashboard</div>

                    <div class="panel-body">
                    You are logged in as <strong>Instructor</strong>
                    <div class="panel-body">
                    <a href ="/grades" class = 'btn btn-info'>Submit Grades</a>
                    <a href = "/catalogues" class = "btn btn-success">View Catalogues</a>
                    

                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

{{-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <a href ="/posts/create" class = 'btn btn-primary'>Create Post</a>
                   <h3> Your Blog Posts </h3>
                   @if(count($posts)  > 0)
                   <table class ="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href ="/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a></td>
                            <td> {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}</td>
                        </tr>
                    @endforeach
                    </table>
                    @else
                    <p>You have no posts</p>
                    
                    @endif
                    
                   
                </tr>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
