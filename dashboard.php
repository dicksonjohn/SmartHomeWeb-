<?php 
session_start();
IF(ISSET($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="logo.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Smart Home</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<img src="logo.png" width="40" height="40">
    <a class="navbar-brand" href="index.php">Smart Home</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="userdash.php">Users</a>
            </li>
            <li>
              <a href="logsdash.php">Logs</a>
            </li>
            <li>
              <a href="statusdash.php">Status</a>
            </li>
          </ul>
        </li>
        
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="logout.php?destroy">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">



      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

<!-- Icon Cards-->
      <div class="row" style="width: 100rem;">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-sun-o"></i>
              </div>
              <div class="mr-5">Room 1</div>
<div class="mr-5">Light Status</div>
<?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");
 $query = "SELECT status from lights where room ='room1'";  
 $result = mysqli_query($connect, $query); 
?>
<?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
if (''.$row["status"].'' == "0") {
    echo "OFF";
} else {
    echo "ON";
}
 }  
?>
	</div>
            <a class="card-footer text-white clearfix small z-1" href="logsdash.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-sun-o"></i>
              </div>
              <div class="mr-5">Room 2</div>
<div class="mr-5">Light Status</div>
<?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");
 $query = "SELECT status from lights where room ='room2'";  
 $result = mysqli_query($connect, $query); 
?>
<?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
if (''.$row["status"].'' == "0") {
    echo "OFF";
} else {
    echo "ON";
}
 }  
?>
	</div>
            <a class="card-footer text-white clearfix small z-1" href="logsdash.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-sun-o"></i>
              </div>
              <div class="mr-5">Room 3</div>
<div class="mr-5">Light Status</div>
<?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");
 $query = "SELECT status from lights where room ='room3'";  
 $result = mysqli_query($connect, $query); 
?>
<?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
if (''.$row["status"].'' == "0") {
    echo "OFF";
} else {
    echo "ON";
}
 }  
?>
	</div>
            <a class="card-footer text-white clearfix small z-1" href="logsdash.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



      <div class="row" style="width: 100rem;">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-lock"></i>
              </div>
              <div class="mr-5">Motion Sensor</div>
	<div class="mr-5">Arm/Disarm</div>

	</div>
            <a class="card-footer text-white clearfix small z-1" href="javascript:open_script('startmotion.php')">
              <span class="float-left">Arm</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
            <a class="card-footer text-white clearfix small z-1" href="javascript:open_script('stopmotion.php')">
              <span class="float-left">Disarm</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
</div>

<!-- Pie chart-->
 <?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");
 $query = "SELECT username, count(*) as number FROM logs GROUP BY username";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
             
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["username"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Usage Statistics',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center"></h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  


      </body>  
 </html>

  

    
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>My smart home© 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

  </div>
</body>

</html>
<?php 
}else{
echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='logindash.php';</script>"; 
}
?>
<script>
function open_script(url){
   
window.open(url, '_blank');
  
}
</script>


