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
    <link rel = "stylesheet"    type = "text/css"  href = "j2.css" />
    <title>Jeopardy</title>
</head>


<body>

    <div class = game>
        <h1>JEOPARDY</h1>
        <a href="logout.php">Click here</a> to Logout.
        <?php echo $message; ?>
    </div>


    <table align ="center" border ="1" width="600" height="450">
        <tr>
            <td>Food</td><td>Buildings</td><td>Comp Sci</td><td>Parking</td><td>Other Degrees</td>
        </tr>
        <tr>
            <td><a id = "value" href="food1.html">$100</a></td><td><a id = "value" href="buildings1.html">$100</a></td><td><a id = "value" href="compSci1.html">$100</a></td><td><a id = "value" href="parking1.html">$100</a></td><td><a id = "value" href="otherDegrees1.html">$100</a></td>
        </tr>
        <tr>
            <td><a id = "value" href="food2.html">$200</a></td><td><a id = "value" href="buildings2.html">$200</a></td><td><a id = "value" href="compSci2.html">$200</a></td><td><a id = "value" href="parking2.html">$200</a></td><td><a id = "value" href="OtherDegrees2.html">$200</a></td>
        </tr>
        <tr>
            <td><a id = "value" href="food3.html">$300</a></td><td><a id = "value" href="buildings3.html">$300</a></td><td><a id = "value" href="compSci3.html">$300</a></td><td><a id = "value" href="parking3.html">$300</a></td><td><a id = "value" href="OtherDegrees3.html">$300</a></td>
        </tr>
        <tr>
            <td><a id = "value" href="food4.html">$400</a></td><td><a id = "value" href="buildings4.html">$400</a></td><td><a id = "value" href="compSci4.html">$400</a></td><td><a id = "value" href="parking4.html">$400</a></td><td><a id = "value" href="OtherDegrees4.html">$400</a></td>
        </tr>
        <tr>
            <td><a id = "value" href="food5.html">$500</a></td><td><a id = "value" href="buildings5.html">$500</a></td><td><a id = "value" href="compSci5.html">$500</a></td><td><a id = "value" href="parking5.html">$500</a></td><td><a id = "value" href="OtherDegrees5.html">$500</a></td>
        </tr>
    </table>



</body>
</html>