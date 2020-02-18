<?php

//Receive POST request data and assign to variables
$user_name = $_POST['ucid'];
$user_pass = $_POST['password'];

//Connect to database
$servername = "sql.njit.edu";
$serveruser = "cc593";
$serverpass = "XXXXXXXXX";
$dbname = "cc593";
$link = new mysqli($servername, $serveruser, $serverpass, $dbname);

//Exit if connection to database cannot be formed
if($link->connect_errno > 0){
  die('Unable to connect to database [' . $link->connect_error. ']');
}

//Create query and execute search query
$query = "SELECT user, pass FROM account WHERE user = '$user_name'";
$result = $link->query($query);

//Exit if search query cannot be executed
if(!$result = $link->query($query)){
  die('There was an error running the query [' . $link->error. ']');
}

//Fetch query data
$row = $result->fetch_assoc();

//Validate credentials and generate response
if($row['user']=="$user_name"){
  if(password_verify($user_pass, $row['pass'])){
    echo "Correct Credentials";
  }
  else{
    echo "Incorrect Password";
  }
}
else {
  echo "Incorrect Username";
}
?>
