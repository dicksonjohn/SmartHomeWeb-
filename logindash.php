<!DOCTYPE HTML>
<html>
<head>
    <title>Smart Home Login</title>
<!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
<p class="aligncenter">
<img src="logo.png" >
</p>
<style>
.aligncenter {
    text-align: center;
}
</style>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        
            <form class="form-group" action="" method="POST">
                
                <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
            </form>
            </div>
    </div>
  </div>
 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
<?php
$connect = mysqli_connect("localhost", "phpmyadmin", "raspberry", "smarthome");
$query = "select * from users where username='$username' and password='$hash_pass' and admin='yes'";  
IF(ISSET($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql = "select * from users where username='$username'";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
                $hash_pass = $row['password'];
                $hash = password_verify($password, $hash_pass);
                if($hash == 0)
                {echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='logindash.php';</script>";
                }else{
                    $query = "select * from users where username='$username' and password='$hash_pass' and admin='yes'";
$cek = mysqli_num_rows(mysqli_query($con,$query));
$data = mysqli_fetch_array(mysqli_query($con,$query));
IF($cek > 0)
{
 session_start();
 $_SESSION['username'] = $data['username'];
//  $_SESSION['name'] = $data['full_name'];
 echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='dashboard.php';</script>";
}else{
 echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='logindash.php';</script>";
}
}
}
?>