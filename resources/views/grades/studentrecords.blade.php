@extends('layouts.app')

@section('content')
<h3 align = "center">Student Grade Records</h3>

<?php

$student_id = "";
$course_code = "";
$course_name = "";
$credits = "";
$percentage = "";
$semester = "";
$year = "";


$edit_action= FALSE;


$dbhost= '127.0.0.1'; 
$dbusername = 'root';
$dbpassword = 'sadada619';
$dbname = 'lsapp';



$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_errno($connection)){
	print ('Failed to connect to db, because of the error "' . mysqli_connect_error() . '"');
}



$sql = "SELECT student_id,course_code,course_name,credits,percentage,semester,year from grade";
$sql_result = mysqli_query($connection, $sql);



print (' <table class="table table-striped" border = 1>
		<tr>
            <th>student_id</th>
			<th>course_code</th>
			<th>course_name</th>
			<th>credits</th>
            <th>percentage</th>
            <th>semester</th>
            <th>year</th>
           
		</tr>');

foreach ($sql_result as $student_row){
	print('<tr>');
        print ('<td>' .$student_row['student_id']. '</td>');
		print ('<td>' .$student_row['course_code']. '</td>');
		print ('<td>' .$student_row['course_name']. '</td>');
		print ('<td>' .$student_row['credits']. '</td>');
        print ('<td>' .$student_row['percentage']. '</td>');
        print ('<td>' .$student_row['semester']. '</td>');
         print ('<td>' .$student_row['year']. '</td>');
	print ( '<br />' );
	
	print('</tr>');
}
print('</table><br /><br />');

 ?>

</div>


<?php
	mysqli_close($connection);
?>

@endsection