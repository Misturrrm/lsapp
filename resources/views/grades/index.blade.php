@extends('layouts.app')

@section('content')

<?php
$id = "";
$percentage = "";
$course_code = "";
$course_name = "";
$credits = "";
$student_id = "";
$semester = "";
$year = "";


$edit_action= FALSE;


$dbhost= '127.0.0.1';
$dbusername = 'root';
$dbpassword = 'sadada619';
$dbname = 'lsapp';

$data_submitted = isset($_POST['submit']);
$errors = array();





$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_errno($connection)){
	print ('Failed to connect to db, because of the error "' . mysqli_connect_error() . '"');
}



$sql = "SELECT id, percentage, course_code, course_name, credits, student_id, semester, year from grade";
$sql_result = mysqli_query($connection, $sql);



print (' <table class="table table-striped" border = 1>
		<tr>
			<th>id</th>
			<th>percentage</th>
			<th>course_code</th>
			<th>course_name</th>
			<th>credits</th>
			<th>student_id</th>
            <th>semester</th>
            <th>year</th>
		</tr>');

foreach ($sql_result as $student_row){
	print('<tr>');
         print ('<td>' .$student_row['id']. '</td>');
         print ('<td>' .$student_row['percentage']. '</td>');
		print ('<td>' .$student_row['course_code']. '</td>');
		print ('<td>' .$student_row['course_name']. '</td>');
		print ('<td>' .$student_row['credits']. '</td>');
		print ('<td>' .$student_row['student_id']. '</td>');
        print ('<td>' .$student_row['semester']. '</td>');
        print ('<td>' .$student_row['year']. '</td>');



	print ( '<br />' );
	
	print('</tr>');
}
print('</table><br /><br />');

?>
 

 @if(Auth::user()->roles == '3') 

		{!! Form::open(['action'=> 'GradesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{form::label('id', 'Id' )}}
            {{Form::text('id', '',['class' => 'form-control', 'placeholder'=> 'Grade ID'])}}
         </div>
		 <div class = "form-group">
            {{form::label('percentage', 'Percentage' )}}
            {{Form::text('percentage', '',['class' => 'form-control', 'placeholder'=> 'Percentage'])}}
         </div>
		 <div class = "form-group">
            {{form::label('course_code', 'course_code' )}}
            {{Form::text('course_code', '',['class' => 'form-control', 'placeholder'=> 'Course code'])}}
         </div>
        <div class = "form-group">
            {{form::label('course_name', 'Course_name' )}}
            {{Form::text('course_name', '',['class' => 'form-control', 'placeholder'=> 'Course_name'])}}
        </div>
		 <div class = "form-group">
            {{form::label('credits', 'Credits' )}}
            {{Form::text('credits', '',['class' => 'form-control', 'placeholder'=> 'Credits'])}}
         </div>
		  
		  <div class = "form-group">
            {{form::label('student_id', 'Student_ID' )}}
            {{Form::text('student_id', '',['class' => 'form-control', 'placeholder'=> 'Student ID'])}}
         </div>
          <div class = "form-group">
            {{form::label('semester', 'Semester' )}}
            {{Form::text('semester', '',['class' => 'form-control', 'placeholder'=> 'Semester'])}}
         </div>
          <div class = "form-group">
            {{form::label('year', 'Year' )}}
            {{Form::text('year', '',['class' => 'form-control', 'placeholder'=> 'Year'])}}
         </div>

         {{Form::submit('submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}


</div>

@endif
<?php
	mysqli_close($connection);
?>


@endsection