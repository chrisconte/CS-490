<?php
$url = 'https://web.njit.edu/~cc593/r.php';
$fields = array(
	'ucid' => urlencode("test_ucid"),
  'password'=> urlencode("test_password")
);

//Convert data to URL format
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//Open connection
$ch = curl_init();

//Construct the URL with the post data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//Execute post
$result = curl_exec($ch);

//Close connection
curl_close($ch);

//Echo the response
echo $result;
?>
