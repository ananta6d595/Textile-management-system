<?php

session_start();
$error = "";

if(isset($_POST['submit'])){
	if(empty($_POST['name']) || empty($_POST['password'])){
		$error = "Username or password invalid";
	}
	else
	{
		$username = $_POST['name'];
		$password = $_POST['password'];
		
		$conn = mysqli_connect("localhost","root","","company");
		
		$sql = "SELECT manager_name, password FROM manager WHERE manager_name='$username' AND password='$password'";
		$query= mysqli_query($conn,$sql);

		$row= mysqli_num_rows($query);
			if ($row == 1){
				echo "login sucessful";
				$_SESSION['user']= $username;
				header('location:managerprof.php');
			} else{
				echo "login failed";
				header('location:managerlogin.php');
			}

		
		mysqli_close($conn);
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" a href="s1.css">
</head>
<body>
	<div class="container">
		<img src="login.png">
		<form action="#" method="POST">
			<div class="form-input">
				<input type="text" name="name"placeholder="Enter the User Name"/>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password">
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
			<br>
			<a href="index.php">Back to home page</a>

		</form>
	</div>
</body>
</html>