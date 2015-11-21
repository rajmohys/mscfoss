<?php
session_start();
if (! isset($_SESSION["sess_user"]))
{
	header("location:login.php");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Welcome </title>
</head>
<body>
	<h2> Welcome, <?=$_SESSION['sess_user'];?> ! <a href="logout.php">Logout</a></h2>
	<p> Hello, friend welcome!</p>
</body>
</html>
<?php	
}
?>