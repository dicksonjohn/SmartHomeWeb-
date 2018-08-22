<?php
 define('HOST','localhost');
 define('USER','phpmyadmin');
 define('PASS','raspberry');
 define('DB','smarthome');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');