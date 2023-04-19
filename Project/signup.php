<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$reg_no = $_POST['reg_no'];
		$password = $_POST['password'];

		if(!empty($reg_no) && !empty($password))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into clg (user_id,reg_no,password) values ('$user_id','$reg_no','$password')";

			mysqli_query($con, $query);

			header("Location: login2.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>USER SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a class="navbar-brand" href="login"><img src = "bg.png" style="width:200px;height:75px;"></a> 
	<div id="box">

		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<h2>Signup</h2>
			<label>Registration number</label>
          <input type="varchar" name="reg_no" placeholder="registration_no"><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>


			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login2.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>