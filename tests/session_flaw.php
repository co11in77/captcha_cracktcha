<html>
<body>
<body bgcolor="#E6E6FB">
<br></br>

  <head>
    <title>Good Captcha Integration</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
  
    <form action="response_session_flaw.php" method="POST" onsubmit="return validateRecaptcha();">
	<h2>Enter something!!! 	<br></br> <input type="text" name="value1"><br></h2>
	<br></br>

      <div class="g-recaptcha" data-sitekey="<?php include('config.php'); echo $public_recaptcha_key ?>"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
	(This page sets a cookie)
	
	<!--part of below script and button part from https://stackoverflow.com/questions/28994785/cant-get-google-recaptcha-v2-to-prevent-form-submission/37461461 -->
	<script>
	function validateRecaptcha() {
    var response = grecaptcha.getResponse();
    if (response.length === 0) {
        alert("fill out the captcha!");
        return false;
    } else {
        //alert("validated");
        return true;
    }
}



</script>

	<?php
$cookie_name = "CAPTCHA_COOKIE";
$cookie_value = 'Has_not_completed_captcha'; //set off time

setcookie($cookie_name,$cookie_value,time()+86400,"/"); //sets cookie for 1 day

?>
  </body>
  This flaw allows for bypassing a CAPTCHA once a valid session identifier has been found to have completed the CAPTCHA one time. 
      		      <br>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="window.location.href = '/lesson/cracktcha/session_flaw.php';">View Solution</button>
</html>