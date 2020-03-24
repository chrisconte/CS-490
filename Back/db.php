<?php

//Connect to database
$servername = "sql.njit.edu";
$serveruser = "cc593";
$serverpass = "******";
$dbname = "cc593";
$link = new mysqli($servername, $serveruser, $serverpass, $dbname);

//Exit if connection to database cannot be formed
if($link->connect_errno > 0){
  die('Unable to connect to database [' . $link->connect_error. ']');
}
?>
