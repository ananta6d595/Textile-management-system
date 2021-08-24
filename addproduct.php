<?php

session_start();

$pnameerr=$priceerr=$c_iderr= "";
$pname=$price=$c_id="";


if(isset($_POST['submit'])){
	if(empty($_POST['pname'])){
		$pnameerr="Required";
	}else{
		$pname=$_POST['pname'];
	}
	if(empty($_POST['price'])){
		$priceerr="Fill this part";
	}else{
		$price= $_POST['price'];
	}

	if(empty($_POST['c_id'])){
		$c_iderr="Fill this part";
	}else{
		$c_id=$_POST['c_id'];
	}
	

	$conn=mysqli_connect("localhost","root","","company");
	

	$query= "INSERT INTO product(pro_name,price,cat_id) VALUES ('$pname','$price','$c_id')";
    $q=mysqli_query($conn,$query);


if($q)
  {
	     echo "<script>location.href='adminprof.php?'</script>";	

}

mysqli_close($conn);
}

?>

<html>
   <head>
      <style>
      	.header{
      		background-color: #0E3D5E;
      		color:white;
      		height:100px;
      		}

      		a{
      			text-decoration: none;
      			color:#C70039;
      			font-size:30px;
      			text-align:left;
      		}



      	.container{
      		border:2px solid black;
      		width:500px;
      		margin:2rem auto;
      		padding:2rem;

      	}

         .error {color: #FF0000;}
      </style>
   </head>
<body style="background-image: url(img.png)">

	<div class="header">
		<marquee behavior="scroll" direction="left"><h1><i>XYZ Textile Ltd.</i></h1></marquee>
		
	</div>
	<a href="adminprof.php"><i>Back to previous page</i></a>
	<center>
	<h2>Add New Order</h2>
	<div class="container">

	<p><span class = "error">* required field.</span></p>
	<form action ="#" method="POST">
		<table style="font-size:20px">
			<tr>
				<td><input type="text" name="pname" placeholder="Enter Product name">
				<span class = "error">* <?php echo $pnameerr;?></span>
			</td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><input type="text" name="price" placeholder="Enter Product Price">
				<span class = "error">* <?php echo $priceerr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><input type="number" name="c_id" placeholder="Enter Category ID">
				<span class = "error">* <?php echo $c_iderr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
	        <td><input type="submit" name="submit" value="ADD"></td></tr>
</table>

</form>
</div>
</center>
</body>
</html>