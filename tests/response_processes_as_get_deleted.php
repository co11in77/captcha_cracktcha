<html>
<body>
<br></br>
<br></br>

<?php

include('config.php');
//part of code from: https://codeforgeek.com/2014/12/google-recaptcha-tutorial/

        if(isset($_POST['value1'])){
          $value1=$_POST['value1'];
        
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>CAPTCHA Error!!<body bgcolor="#ff9999"></h2>';
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
        } else {
                echo 'CAPTCHA error!<body bgcolor="#ff9999">';
        }
		} //if the post value is set
?>
<?php

include('config.php');
//part of code from: https://codeforgeek.com/2014/12/google-recaptcha-tutorial/

        if(isset($_GET['value1'])){
          $value1=$_GET['value1'];
        
        if(isset($_GET['g-recaptcha-response'])){
          $captcha=$_GET['g-recaptcha-response'];
        
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
                echo '<br></br><h2>Congrats! You successfully entered: ' . $_GET["value1"] . '</h2><body bgcolor="#ccffcc">';
        } else {
                echo 'CAPTCHA error!<body bgcolor="#ff9999">';
        }

		}//if recaptcha is set
			else{
				echo '<br></br><h2>Congrats! You successfully entered: ' . $_GET["value1"] . '</h2><body bgcolor="#ccffcc">'; //else if recaptcha response is not set
				} //end of else
			} // if it's a GET (check for the GET value1)
		
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