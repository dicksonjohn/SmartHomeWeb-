<?php
$con = mysqli_connect("localhost","phpmyadmin","raspberry","smarthome");

if (mysqli_connect_errno())
{
echo "Failed: " .mysqli_connect_error();
}
?>