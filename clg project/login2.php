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

			//read from database
			$query = "select * from clg where reg_no = '$reg_no' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['reg_no'] = $user_data['reg_no'];
						header("Location: welcome2.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a class="navbar-brand" href="login"><img src = "bg.png" style="width:200px;height:75px;"></a>
	
	
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<h2>LOGIN</h2>

			

			<label>Registration number</label>
          <input type="varchar" name="reg_no" placeholder="registration_no"><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>