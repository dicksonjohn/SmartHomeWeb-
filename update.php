<?php
exec("gpio mode 0 out");
exec("gpio mode 2 out");
exec("gpio mode 3 out"); 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//POSTting values 
		$room = $_POST['room'];
                $status = $_POST['status'];
		$username = $_POST['username'];
if(isset($_POST['room'])){
if($_POST['room'] == room1) {

		if(isset($_POST['status'])) {
		if($_POST['status'] == 1) {
		exec("gpio write 0 1");// pin 0 in wiring pi is gpio 17
		} else {
		exec("gpio write 0 0");
		}
		}
}}
if(isset($_POST['room'])){
if($_POST['room'] == room2) {

		if(isset($_POST['status'])) {
		if($_POST['status'] == 1) {
		exec("gpio write 2 1");// pin 2 in wiring pi is gpio 27
		} else {
		exec("gpio write 2 0");
		}
		}
}}
		
if(isset($_POST['room'])){
if($_POST['room'] == room3) {
		if(isset($_POST['status'])) {
		if($_POST['status'] == 1) {
		exec("gpio write 3 1");// pin 3 in wiring pi is gpio 22
		} else {
		exec("gpio write 3 0");
		}
		}	
}}	
		//importing database connection script 
		require_once('dbConnect.php');
				
		//Creating sql query 
		$sql = "UPDATE lights SET status = '$status' WHERE room = '$room';";
		$sql.= "INSERT INTO logs (username,room,status) VALUES('$username','$room','$status');";
		
		//Updating database table 
		if(mysqli_multi_query($con,$sql)){
			echo 'Updated Successfully';
		}else{
			echo 'Could Not Update Try Again';
		}
		
		//closing connection 
		mysqli_close($con);
	}
else{
echo 'error';
}
