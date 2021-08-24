<?php

session_start();

$o_iderr=$c_iderr=$p_iderr= $valerr= $uniterr= "";
$o_id=$c_id=$p_id=$val=$unit="";


if(isset($_POST['submit'])){

	if(empty($_POST['c_id'])){
		$c_iderr="Fill this part";
	}else{
		$c_id=$_POST['c_id'];
	}
	if(empty($_POST['p_id'])){
		$p_iderr="required";
	}else{
		$p_id=$_POST['p_id'];	
	}

	if(empty($_POST['value'])){
		$valerr="Enter value";
	}else{
		$val=$_POST['value'];
	}
	if(empty($_POST['unit'])){
		$uniterr="required";
	}else{
		$unit=$_POST['unit'];
		
	}

	$conn=mysqli_connect("localhost","root","","company");
	

	$query="INSERT INTO orders(order_id,cust_id,pro_id,order_value,unit) VALUES ('$o_id','$c_id','$p_id','$val','$unit')";
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
				<td><input type="number" name="c_id" placeholder="Enter Customer ID">
				<span class = "error">* <?php echo $c_iderr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><input type="number" name="p_id" placeholder="Enter Product ID">
				<span class = "error">* <?php echo $p_iderr;?></span></td>
			</tr>

			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><input type="text" name="value" placeholder="Enter order value">
				<span class = "error">* <?php echo $valerr;?></span></td>
			</tr>

			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><input type="text" name="unit" placeholder="Enter Ordering Unit">
				<span class = "error">* <?php echo $uniterr;?></span></td>
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