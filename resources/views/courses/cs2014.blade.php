@extends('layouts.app')

@section('content')
<a href = "/departments" class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a> <a align = "right" href = "/catalogues/2014/Computer Science/Requirements" class = "btn btn-success">View Requirements</a><a href = "/catalogues/2014/Computer Science/Study Guide" class = "btn btn-danger">View Study Guide</a>
    <h3 align = 'left'><strong>Bachelor of Science (B.Sc) in Computer Science</strong></h3>
    <p> The SITC B.Sc. Program in Computer Science is designed with core courses that provide benefits and depth in the field, along with a strong theoretical component as a foundation for good software engineering and information systems. The program includes courses in the sciences and mathematics, general education requirements in the humanities and an in-depth sequence of specialized computer courses.</p>
	<br>
	<p> The program provides a balance of both theory and practice in core courses covering both software and hardware through integrated lectures, laboratory sequences and individual and group projects often with direct application in the community or region. The curriculum is very flexible and provies student opportunities for concentration in specific areas of interest through their choice of appropriate CSC and/or software engineering electives. The distribution of courses includes the fundatamentals needed by every computer scientist. As the software industry evolves in Sub-Saharan Africa, practioners are increasingly expected to build reliable systems for mission and life-critical applications that are affordable and applicable within the context of developing economics. Such professionals distinguish themselves with a solid mathematical and computer science foundation, mastery of emerging software tools and methods, knowledge of the cultural contect and experience in collaborative work on large projects. The SITC curriculum is designed to prepare our students in all these areas.</p>
	<br>
	<p>The ubiquitous nature of computing in everyday life means that the computer science graduate can today pursue careers in just about any area of human endeavour. Some examples include: using technology to connect rural communities, computational biology and chemistry, financial computing, scientific computing, etc. Computer science graduates may also opt to further their studies, in which case they can pursue graduate studies(Masters & PHDs) in Computer Science, Software Engineering and related disciplines such as IT, Information Systems, the discrete engineering fields such as electronic and electronic engineering and the more general engineering field such as Systems Engineering.</p>
	<div class ="container">
   

<?php
$course_code = "";
$course_name = "";
$course_id = "";
$credits = "";
$department_id = "";
$course_catalogue_year = "";

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



$sql = "SELECT course_code, course_name, course_id, credits, department_id, course_catalogue_year from course";
$sql_result = mysqli_query($connection, $sql);



print (' <table class="table table-striped" border = 1>
		<tr>
			<th>course_code</th>
			<th>course_name</th>
			<th>course_id</th>
			<th>credits</th>
			<th>department_id</th>
			<th>course_catalogue_year</th>
		</tr>');

foreach ($sql_result as $student_row){
	print('<tr>');
		print ('<td>' .$student_row['course_code']. '</td>');
		print ('<td>' .$student_row['course_name']. '</td>');
		print ('<td>' .$student_row['course_id']. '</td>');
		print ('<td>' .$student_row['credits']. '</td>');
		print ('<td>' .$student_row['department_id']. '</td>');
		print ('<td>' .$student_row['course_catalogue_year']. '</td>');

	print ( '<br />' );
	
	print('</tr>');
}
print('</table><br /><br />');

?>
 

 @if(Auth::user()->roles == '1') 

		{!! Form::open(['action'=> 'CoursesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{form::label('course_code', 'Course Code' )}}
            {{Form::text('course_code', '',['class' => 'form-control', 'placeholder'=> 'Course Code'])}}
         </div>
		 <div class = "form-group">
            {{form::label('course_name', 'Course Name' )}}
            {{Form::text('course_name', '',['class' => 'form-control', 'placeholder'=> 'Course Name'])}}
         </div>
		 <div class = "form-group">
            {{form::label('course_id', 'Course_id' )}}
            {{Form::text('course_id', '',['class' => 'form-control', 'placeholder'=> 'Course ID'])}}
         </div>
		 <div class = "form-group">
            {{form::label('credits', 'Credits' )}}
            {{Form::text('credits', '',['class' => 'form-control', 'placeholder'=> 'Credits'])}}
         </div>
		  <div class = "form-group">
            {{form::label('department_id', 'Department_id' )}}
            {{Form::text('department_id', '',['class' => 'form-control', 'placeholder'=> 'Department ID'])}}
         </div>
		  <div class = "form-group">
            {{form::label('course_catalogue_year', 'Year' )}}
            {{Form::text('course_catalogue_year', '',['class' => 'form-control', 'placeholder'=> 'Year'])}}
         </div>

         {{Form::submit('submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}


</div>

@endif
<?php
	mysqli_close($connection);
?>
          
@endsection