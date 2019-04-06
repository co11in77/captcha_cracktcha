<html>
<body>
<body bgcolor="#E6E6FB">
<br></br>

  <head>
    <title>Processes as GET unvalidated</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
  
    <form action="response_processes_as_get_unvalidated.php" method="POST" onsubmit="return validateRecaptcha();">
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
  This flaw is the result of the server accepting GET and POST for the request in question. This is common with APIs that utilized in web applications. Developers may not have integrated protection on the GET string (or POST if it is using GET). In this case the parameter is ignored entirely for the CAPTCHA when using GET. 
  		      <br>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="window.location.href = '/lesson/cracktcha/processes_as_get_unvalidated.php';">View Solution</button>
</html>