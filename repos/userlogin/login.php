<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
	<h3>Login Form</h3>
	<form action="" method="POST">
	Username: <input type="text" name="user"><br/>
	Password: <input type="password" name="pass"<br/>
	<input type="submit" value="Login" name="submit"/>
	</form>
	<?php
	if(isset($_POST["submit"]))
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$con=mysql_connect('localhost','root','moni') or die(mysql_error());
		mysql_select_db('user_registration') or die("Cannot select db");
		$query =mysql_query("SELECT * FROM login WHERE username ='".$user."' AND password='".$pass."'");
		
		$numrows = mysql_num_rows($query);
		if($numrows != 0)
		{
			while ($row=mysql_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
			if($user == $dbusername && $pass =$dbpassword)
			{
				session_start();
				$_SESSION['sess_user']= $user;
				/* Redirect Browser*/
				header("location:member.php");
			}
			else
			{echo "Invalid username or password";}
		}
	}
	?>
	</body>
	</html>
	
	