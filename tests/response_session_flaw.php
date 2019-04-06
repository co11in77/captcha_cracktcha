<html>
<body>
<br></br>
<br></br>


<?php

include('config.php');


        if($_COOKIE['CAPTCHA_COOKIE'] == 'has_completed_captcha'){
			echo '<br></br><h2>Congrats! You successfully entered: ' . $_POST["value1"] . '</h2><body bgcolor="#ccffcc">';
		} else {
		
		
//part of code from: https://codeforgeek.com/2014/12/google-recaptcha-tutorial/
        if(isset($_POST['value1'])){
          $value1=$_POST['value1'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>CAPTCHA Error!!</h2><body bgcolor="#ff9999">';
          exit;
        }
        $secretKey = $secret_recaptcha_key;
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server -- modified as the other logic had a GET - see https://stackoverflow.com/questions/3080146/post-data-to-a-url-in-php
        $url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array('secret' => urlencode($secretKey), 'response' => urlencode($captcha));
		$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
			)
		);
		$context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                echo '<br></br><h2>Congrats! You successfully entered: ' . $_POST["value1"] . '</h2><body bgcolor="#ccffcc">';
				$cookie_name = "CAPTCHA_COOKIE";
				$cookie_value = 'has_completed_captcha'; 
				setcookie($cookie_name,$cookie_value,time()+86400,"/"); //sets cookie for 1 day

        } else {
                echo 'CAPTCHA error!<body bgcolor="#ff9999">';
        }
		
		} //else from line 14
		 //if from from line 12
?>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="lastPage()">Go Back!</button>
<script>
function lastPage() {
  window.history.back();
}
</script>

</body>
</html>