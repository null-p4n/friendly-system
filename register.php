<?php

	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$username = $_POST['username'];
		$email = $_POST["email"];
		$password = md5($_POST['password']);

		$username = mysqli_real_escape_string($db, $username);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		
				$sql="SELECT username FROM users WHERE username='$username'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$msg = "Sorry...This name already exist...";
		}
		$sql="SELECT email FROM users WHERE email='$email'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$msg = "Sorry...This email already exist...";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO users (username, email, password)VALUES ('$username', '$email', '$password')");
			if($query)
			{
				$msg = "Thank You! you are now registered.";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en_us">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <form class="form-signin" method="POST"> 
      <title>Register</title>
   </head>
   
   <body>
<form class="form-signin" method="POST">
<fieldset>
<h2 class="form-signin-heading">~Satanic Register~</h2>
<table width="400" border="0" cellpadding="10" cellspacing="10">
<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
<input type="text" name="username" class="form-control" placeholder="Username" required>
<label for="email" class="sr-only">Email</label>
 <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
<label for="inputPassword" class="sr-only">Password</label>
 <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
<td><div align="center">
<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"/>Register</button>
<h5>Have a account?</h5>
<a class="btn btn-lg btn-primary btn-block" href="login.php">Log In</a>
</form>
</body>

</html>