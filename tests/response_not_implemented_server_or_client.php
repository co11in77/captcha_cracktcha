<html>
<body bgcolor="#ccffcc">
<body>
<br></br>
<br></br>
<h2>Congrats! You successfully entered:  <?php echo $_POST["value1"]; ?><br></h2>
		  <br>
	     <button onclick="window.location.href = '/';">Go Home!</button><button onclick="lastPage()">Go Back!</button>
<script>
function lastPage() {
  window.history.back();
}
</script>
</body>
</html>