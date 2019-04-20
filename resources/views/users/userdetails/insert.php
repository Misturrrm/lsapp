<?php  
 $dbhost= '127.0.0.1'; 
 $dbusername = 'root';
 $dbpassword = 'sadada619';
 $dbname = 'lsapp';
 
 $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
 $sql = "INSERT INTO users(name, email) VALUES('".$_POST["name"]."', '".$_POST["email"]."')";  
 if(mysqli_query($connection, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>

<?php
	mysqli_close($connection);
?>