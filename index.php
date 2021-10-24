<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

if($_SESSION['UserData']['Username'] == "team1"){
	$message = "<h2>You are on Team One</h2>";
} else {
	$message = "<h2>You are on Team Two</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>GAME LOBBY</h1>
	<a href="logout.php">Click here</a> to Logout.
	<?php echo $message; ?>

	
	
</body>
</html>

