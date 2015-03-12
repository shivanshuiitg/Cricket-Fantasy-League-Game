<?php 
	session_start();
	if(isset($_SESSION['broker_id'])){
		header("Location : broker_profile.php");
	}

?>
<html>
<head><title>Cricket Fantsy League</title></head>
<body>
	<h1>Welcome to Cricket Fantsy League </h1>
<br>
<div>
<strong>Login As A Broker</strong><br>
<form action="login.php" method="post">
Broker ID:: <input type="text" id="broker_id" name="broker_id"/><br>
Password :: <input type="password" id="broker_password" name="broker_password"/><br>
<input type="submit" id="login" name="login" value="Login"/>
</form>
</div>
<br>

</form>
</body>
</html>