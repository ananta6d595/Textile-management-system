

<!DOCTYPE html>
<html>
<head>
	<link href="https://font-googleapis.com/css?family=Montserrat:480,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="s3.css">
</head>
<body>
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">
				<h1> XYZ TEXTILE LTD.</h1>

			<ul class="navigation">
				<!--<a href="recivedept.php"><li>Messages from Manager</li></a>-->
				<a href="cust.php"><li>View Customer</li></a>
				<a href="order.php"><li>View Order</li></a>
				<a href="product.php"><li>View Produt</li></a>
				<a href="logout.php"><li>Logout</li></a>
			</ul>
			</div>
		</div>

		<marquee behavior="scroll" direction="left"><h1><i><?php include('retriveMMessage.php');?></i></h1></marquee>
		<!--<marquee behavior="scroll" direction="left"><h1><i><?php //include('recivedept.php');?></i></h1></marquee>-->
	</div>
</body>