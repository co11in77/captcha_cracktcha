<html>
<body>
<body bgcolor="#E6E6FB">
<br></br>

  <head>
    <title>Not Implemented Server or Client side</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="response_not_implemented_server_or_client.php" method="POST">
	<h2>Enter something!!! 	<br></br> <input type="text" name="value1"><br></h2>
	<br></br>

      <div class="g-recaptcha" data-sitekey="<?php include('config.php'); echo $public_recaptcha_key ?>"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
	This flaw is the result of server side code allowing for the submission of the POST with no CAPTCHA validation at all server side or client side. 
		      <br>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button>
	     <button onclick="window.location.href = '/lesson/cracktcha/not_implemented_server_or_client.php';">View Solution</button>
  </body>
</html>