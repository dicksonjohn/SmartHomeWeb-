<?php 
	//Getting username
	$username  = $_GET['username'];

	//Importing database
	require_once('dbConnect.php');
	
	//Creating sql query
	$sql = "DELETE FROM users WHERE username='".$username."'";
	
	//Deleting record in database 
	if(mysqli_query($con,$sql)){
		echo 'User removed Successfully';
	}else{
		echo 'Could Not remove user. Try Again';
	}
	
	//closing connection 
	mysqli_close($con);