<?php
include "db.php";

//Receive POST request data and assign to variables
$user_name = $_POST['ucid'];
$user_pass = $_POST['password'];

//Create query and execute search query
$query = "SELECT user, pass FROM account WHERE user = '$user_name'";
$result = $link->query($query);

//Exit if search query cannot be executed
if(!$result = $link->query($query)){
  die('There was an error running the query [' . $link->error. ']');
}
//Fetch query data
$row = $result->fetch_assoc();

if(empty($row)){
  echo "Incorrect UCID";
}

//Validate credentials and generate response
if($row['user']=="$user_name"){
  if(password_verify($user_pass, $row['pass'])){
    echo $row['priv'];
  }
  else{
    echo "Incorrect Password";

  }
}
?>
