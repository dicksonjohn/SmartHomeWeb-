<?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");
 $query = "SELECT status from lights where room ='room1'";  
 $result = mysqli_query($connect, $query); 
?>
<?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo ''.$row["status"].'';  
                          }  
                          ?> 