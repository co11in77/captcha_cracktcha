<html>
<body>
<body bgcolor="#E6E6FB">
<br></br>

  <head>
    <title>Test Account Integration</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
  
    <form action="response_test_accounts.php" method="POST" onsubmit="return validateRecaptcha();">
	<h2>Enter something!!! 	<br></br> <input type="text" name="value1"><br></h2>
	<input type = "hidden" input name="secretkey" value="<?php include('config.php'); echo $secret_recaptcha_key ?>">
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

 <b>6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe is a valid test secret key for Google reCAPTCHA v2</b>
 <br></br>
 For details see: <a href="https://developers.google.com/recaptcha/docs/faq">https://developers.google.com/recaptcha/docs/faq</a>
  <br></br>
  </body>
  This flaw allows for bypassing a reCAPTCHA when an implementation flaw results in the code's secret key to be client controllable. In this case using a test key for the reCAPTCHA will bypass the reCAPTCHA. 
    		      <br>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="window.location.href = '/lesson/cracktcha/test_accounts.php';">View Solution</button>
</html>