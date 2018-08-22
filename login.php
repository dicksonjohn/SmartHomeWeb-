<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		require_once('dbConnect.php');

		$sql = "select * from users where username='$username'";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
                $hash_pass = $row['password'];
                $hash = password_verify($password, $hash_pass);

if($hash == 0)
{
echo "Invalid Username or Password";
}else{
		$sql = "select * from users where username='$username' and password='$hash_pass'";
		$sqladmin = "select * from users where username='$username' and password='$hash_pass' and admin='yes'";
		
		$check = mysqli_fetch_array(mysqli_query($con,$sql));
		$checkadmin = mysqli_fetch_array(mysqli_query($con,$sqladmin));
		
		if(isset($check)){
			echo "success";
		if(isset($checkadmin)){
			echo "! Welcome admin";
		}
		}
		
		else{
			echo "Invalid Username or Password";
		}

}
}	else{
		echo "error try again";
	}