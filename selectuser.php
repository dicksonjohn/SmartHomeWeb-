<?php  
 if(isset($_POST["user_name"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");  
      $query = "SELECT * FROM users WHERE name = '".$_POST["user_name"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>UserName</label></td>  
                     <td width="70%">'.$row["username"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                 
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>