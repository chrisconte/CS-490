
<?php
	if(isset($_POST["submit"])){
        $url = 'https://web.njit.edu/~pz89/final.php';
        $fields = array(
          'ucid' => urlencode(_POST["U"]),
          'password'=> urlencode(["P"])
        );

        $fields_string="";
        foreach($fields as $key=>$value) { $fields_string = $fields_string.$key.'='.$value.'&'; }
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
