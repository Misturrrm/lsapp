<?php  
$dbhost= '127.0.0.1'; 
$dbusername = 'root';
$dbpassword = 'sadada619';
$dbname = 'lsapp';

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname); 
 $id = $_POST["id"];  
 $name = $_POST["name"];  
 $email = $_POST["email"];  
 $sql = "UPDATE users SET ".$email."='".$name."' WHERE id='".$id."'";  
 if(mysqli_query($connection, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>

<?php
	mysqli_close($connection);
?>