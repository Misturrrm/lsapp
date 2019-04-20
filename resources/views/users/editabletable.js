$(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var name = $('#name').text();  
           var email = $('#email').text();  
           if(name == '')  
           {  
                alert("Enter Name");  
                return false;  
           }  
           if(email == '')  
           {  
                alert("Enter Email");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{name:name, email:email},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, name, email)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, name:name, email:email},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.name', function(){  
           var id = $(this).data("id1");  
           var name = $(this).text();  
           edit_data(id, name, "name");  
      });  
      $(document).on('blur', '.email', function(){  
           var id = $(this).data("id2");  
           var email = $(this).text();  
           edit_data(id,email, "email");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  

/*
<?php  

$dbhost= '127.0.0.1'; 
$dbusername = 'root';
$dbpassword = 'sadada619';
$dbname = 'lsapp';


 $id = $_POST["id"];  
 $name = $_POST["name"];  
 $email = $_POST["email"];
 $is_admin = $_POST["is_admin"]
 $sql = "UPDATE users SET ".$name."='".$email."'  WHERE id='".$id."'";  
 
$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

 if(mysqli_query($connection, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>
*/

