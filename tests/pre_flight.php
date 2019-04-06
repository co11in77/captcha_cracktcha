<html>
<body>
<body bgcolor="#E6E6FB">
<br></br>

  <head>
    <title>Pre-flight CAPTCHA Integration</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
  
    <form action="response_pre_flight1.php" method="POST" onsubmit="return validateRecaptcha();">
	<h2>Enter something!!! 	<br></br> <input type="text" name="value1"><br></h2>
	<br></br>

      <div class="g-recaptcha" data-sitekey="<?php include('config.php'); echo $public_recaptcha_key ?>"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
	
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
	
  </body>
  This flaw is the result of a developer creating a seperate request for the CAPTCHA prior to submiting the actual request (which can be repeated without reCAPTCHA validation).
        		      <br>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="window.location.href = '/lesson/cracktcha/pre_flight.php';">View Solution</button>
</html>