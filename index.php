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

<h1>IN GAME</h1>
<a href="logout.php">Click here</a> to Logout.
<?php echo $message; ?>
