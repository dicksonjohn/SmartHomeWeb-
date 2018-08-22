<?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");  
 $query = "SELECT * FROM users";  
 $query1 = "SELECT * FROM logs";
 $query2 = "SELECT * FROM lights";
 $result = mysqli_query($connect, $query);  
 $result1 = mysqli_query($connect, $query1); 
 $result2 = mysqli_query($connect, $query2);
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
             
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"/>      
</head>  
      <body>  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
           <br /><br />  
           <div class="container">  
                <h3 align="center">Logs</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="logs_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Username</td>  
                                    <td>Room</td>  
                                    <td>Status</td>  
                                    <td>Date/Time</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["username"].'</td>  
                                    <td>'.$row["room"].'</td>  
                                    <td>'.$row["status"].'</td>  
                                    <td>'.$row["time"].'</td>  
                                     
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#logs_data').DataTable();  
 });  
 </script> 