<?php
session_start();

if(!isset($_SESSION['user'])){
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
	* {
margin:0px;
padding:0px;

}
#profile {
	font-size:50px;
	color:red;
}
#nav ul{
list-style:none;
}
#nav ul li{
background-color:#057670 ;
width:150px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color:white;
font-size:18px;
opacity:.8;
}

#nav ul li a {
	text-decoration: none;
	display: block;
}
#nav ul li a:hover{
background-color:#23664A;}

#nav ul li ul li{
	display:none;
}

#nav ul li:hover ul li{
	display: block;
}
</style>
<meta charset="utf-8">
</style>
</head>
<body>
	<body a link="white" vlink="white">

	<div class="header">

<div id="profile">
<b id="welcome">Welcome <?php echo  $_SESSION['user'] ?></b></div>
<br><br><br><br><br><br>

<div class="body">
	<div id="nav">
	<ul style="list-style:none">
		<li><a>Add</a>
			<ul>
				<li><a href="addemp.php">Employee</a></li>
				<li><a href="addcust.php">Customer</a></li>
				<li><a href="addorder.php">Order</a></li>
				<li><a href="addproduct.php">Product</a></li>
			</ul>
		</li>

		<li><a>Update</a>
			<ul>
				<li><a>Employee</a></li>
				<li><a>Customer</a></li>
				<li><a>Order</a></li>
				<li><a>Product</a></li>
			</ul>
		</li>

		<li><a>Delete</a>
			<ul>
				<li><a>Employee</a></li>
				<li><a>Customer</a></li>
				<li><a>Order</a></li>
				<li><a>Product</a></li>
			</ul>
		</li>


        <li><a href="logout.php">Log Out</a></li>
    </ul>
</div>
</div>
</body>
</html>