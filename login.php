<?php

session_start();
$error = "";

if(isset($_POST['submit'])){
	if(empty($_POST['username'])){
		$nameErr="required";
	}else{
		$username= $_POST['username'];
		if(!preg_match("/^[a-zA-Z]*$/", $username)){
			$nameErr="only letters and white space are allowed";
		}
	}

	if(empty($_POST['password'])){
		$pErr="required";
	}else{
		$password = $_POST['password'];
	}
		
		$conn = mysqli_connect("localhost","root","","company");
		
		$query = "SELECT emp_name, password FROM employee WHERE emp_name=? AND password=?";
		
		$stmt = $conn->prepare($query);
		$stmt-> bind_param("ss",$username, $password);
		$stmt->execute();
		$stmt->bind_result($username,$password);
		$stmt->store_result();
		
		if($stmt->fetch())
		{
			$_SESSION['login_user'] = $username;
			header("location: profile.php");
		}
		else {
			$error = "Username or Password is invalid";
		}
		
		mysqli_close($conn);
	}

if(isset($_SESSION['login_user'])){
	header("location: employeeprof.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" a href="s1.css">
</head>
<body>
	<div class="container">
		
		<form action="#" method="POST">
			<div class="form-input">
				<input type="text" name="username"placeholder="Enter the User Name"/>
			</div>
			<div lass="form-input">
				<input type="password" name="password" placeholder="Password">
			</div>
			<input type="submit" name="submit" value="LOGIN" />
<br>
						<a href="index.php">Back to home page</a>

		</form>
	</div>
</body>
</html>
</div>
</body>
</html>
