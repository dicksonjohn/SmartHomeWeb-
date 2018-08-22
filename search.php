<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $room  = $_GET['room'];
 
 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM lights WHERE room='".$room."'";
 
 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array("status"=>$res['status']));
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
 
 }