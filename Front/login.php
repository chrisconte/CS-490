<?php
require 'curl.php';

$url = 'https://web.njit.edu/~cc593/mid/curl.php'

$raw = file_get_contents('php://input');
$fields = array(
      'U' => urlencode($decoded["user"]),
      'P'=> urlencode($decoded["pass"])
    );

    $fields_string="";
    foreach($fields as $key=>$value) { $fie$

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, count($fi$
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fi$
    curl_setopt($ch, CURLOPT_RETURNTRANSFER$

    $response = trim( curl_exec($ch) );

    curl_close($ch);
echo $response;
?>
