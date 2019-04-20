<?php  
 $dbhost= '127.0.0.1'; 
 $dbusername = 'root';
 $dbpassword = 'sadada619';
 $dbname = 'lsapp';
 
 $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname); 
 $sql = "DELETE FROM users WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connection, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>

<?php
	mysqli_close($connection);
?>