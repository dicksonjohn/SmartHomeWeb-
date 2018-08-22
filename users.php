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
           <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
<div class="container" style="width:700px;">  
                <h3 align="center">Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</h3>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">User Name</th>  
                               <th width="30%">View</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><input type="button" name="view" value="view" id="<?php echo $row["name"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fadein">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">User Details</h4>  
                </div>  
                <div class="modal-body" id="user_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var user_name = $(this).attr("id");  
           $.ajax({  
                url:"selectuser.php",  
                method:"post",  
                data:{user_name:user_name},  
                success:function(data){  
                     $('#user_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>




