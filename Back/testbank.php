<?php
if (isset($_POST['submit'])) {
  $url = 'https://web.njit.edu/~cc593/userauth.php';
  $fields = array(
    'topic'=>urlencode($_POST["topic"]),
    'difficulty'=>urlencode($_POST["difficulty"]),
    'id'=>urlencode($_POST["id"]),
    'key'=>urlencode($_POST["key"])
  );


  //Convert data to URL format
  $fields_string = '';
  foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }

  //Open connection
  $ch = curl_init();

  //Construct the URL with the post data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, count($fields));
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Execute post
  $result = curl_exec($ch);

  //Close connection
  curl_close($ch);

  //Print the response
  echo $result;
 }
?>
