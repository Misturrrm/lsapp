@extends('layouts.app')

@section('content')
<a href= '/catalogues/2014/Computer Science' class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
<h3 align = 'left'><strong>Major Electives (6 credits)</strong></h3>
 

<p> In addition to the requirements listed above, Computer Science students must successfully complete 6 credits of major electives. Those students who are interested in specific areas in the discipline have the following set of major electives from which to choose depending on their career needs and personal interests. Options for specialization include but are not limited to financial computing, scientific computing, computational chemistry and biology, game design, computer network and object-oriented software development. Please note that these specializations are merely suggested foci, as concentrations in the Computer Science and do not appear on degree certifications. The major electives are listed below:</p>
<div class ="container">
   
<?php

$course_code = "";
$course_name = "";
$credits = "";
$major_requirement = "";

$edit_action= FALSE;


$dbhost= '127.0.0.1'; 
$dbusername = 'root';
$dbpassword = 'sadada619';
$dbname = 'lsapp';



$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_errno($connection)){
	print ('Failed to connect to db, because of the error "' . mysqli_connect_error() . '"');
}



$sql = "SELECT course_code, course_name,credits, major_requirement from course where major_requirement = '1'";
$sql_result = mysqli_query($connection, $sql);



print (' <table class="table table-striped" border = 1>
		<tr>
			<th>course_code</th>
			<th>course_name</th>
			<th>credits</th>
           
		</tr>');

foreach ($sql_result as $student_row){
	print('<tr>');
		print ('<td>' .$student_row['course_code']. '</td>');
		print ('<td>' .$student_row['course_name']. '</td>');
		print ('<td>' .$student_row['credits']. '</td>');
        //print ('<td>' .$student_row['major_requirement']. '</td>');

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