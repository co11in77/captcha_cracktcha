<html>
<body>
<body bgcolor="#E6E6FB">
<br></br>

  <head>
    <title>Works Deleted Captcha Integration</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
  
    <form action="response_works_deleted.php" method="POST" onsubmit="return validateRecaptcha();">
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
  This flaw generally appears when the developers decide to use a conditional type CAPTCHA request. Developers may check for the CAPTCHA parameter and if it is there validate on it. If it is not there it bypasses this setup logically
  		      <br>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="window.location.href = '/lesson/cracktcha/works_deleted.php';">View Solution</button>
</html>