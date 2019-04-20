@extends('layouts.app')

@section('content')
    <h1><strong>Create Catalog</strong></h1>
    {!! Form::open(['action'=> 'CataloguesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{form::label('year', 'Year' )}}
            {{Form::text('year', '',['class' => 'form-control', 'placeholder'=> 'Year'])}}
         </div>
          <div class = "form-group">
            {{form::label('admin_id', 'Admin_id' )}}
            {{Form::text('admin_id', '',['class' => 'form-control', 'placeholder'=> 'Admin_id'])}}
         </div>
         <div class = "form-group">
            {{form::label('dept_name', 'Dept_name' )}}
            {{Form::text('dept_name', '',['class' => 'form-control', 'placeholder'=> 'Dept_name'])}}
         </div>
         <div class = "form-group">
            {{form::label('dept_id', 'Dept_id' )}}
            {{Form::text('dept_id', '',['class' => 'form-control', 'placeholder'=> 'Dept_id'])}}
         </div>

         {{--  <div class = "form-group">
            {{form::label('dept_name', 'Dept_name' )}}
            {{Form::text('dept_name', '',['class' => 'form-control', 'placeholder'=> 'Dept_name'])}}
         </div>  --}}
         {{--  <strong>Department</strong>
         <div class = "form-group">
         <select name = "dept_name" id="">
            <option value = "">Information Systems</option>
            <option value = "">Computer Science</option>
            <option value = "">Software Engineering</option>
        </select>  --}}


       {{Form::submit('submit', ['class'=>'btn btn-primary'])}}


    {!! Form::close() !!}
    
   
@endsection