<?php
  $url = 'https://web.njit.edu/~cc593/back/back.php';
  $fields = array(
  'U' => urlencode($_POST["U"]),
  'P'=> urlencode($_POST["P"])
);

  $fields_string="";
  foreach($fields as $key=>$value) { $fields_string = $fields_string.$key.'='.$value.'&'; }

  $ch = curl_init();

  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, count($fields));
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER$

  $result = trim( curl_exec($ch) );
  echo $result;
?>


