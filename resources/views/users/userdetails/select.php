<?php  


 $dbhost= '127.0.0.1'; 
 $dbusername = 'root';
 $dbpassword = 'sadada619';
 $dbname = 'lsapp';
 
 $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
 if (mysqli_connect_errno($connection)){
     print ('Failed to connect to db, because of the error "' . mysqli_connect_error() . '"');
 }
 
 $output = '';  
 $sql = "SELECT id,name,email FROM users where id>'3'";  
 $result = mysqli_query($connection, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table  class="table table-striped">  
                <tr>  
                     <th width="10%">id</th>  
                     <th width="40%">name</th>  
                     <th width="40%">email</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="email" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>

 