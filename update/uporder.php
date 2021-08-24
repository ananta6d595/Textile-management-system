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
	

	$query="UPDATE orders SET order_value='$val', unit='$unit' WHERE cust_id='$c_id' AND pro_id='$p_id' ";
    $q=mysqli_query($conn,$query);


if($q)
  {
	    // echo "<script>location.href='uporder.php?'</script>";	
  	
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
	<center>
	<h2>Update Order</h2>
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
	        <td><input type="submit" name="submit" value="Update"></td></tr>
</table>

<h2>Order Table</h2>

<?php

$connn=mysqli_connect("localhost","root","","company");

$sql="SELECT * FROM orders";

$result= mysqli_query($connn,$sql);

if(mysqli_num_rows($result)>0){
	echo "</br>";
	echo "<table border='1'>";
	echo "<tr><th><i>ORDER ID</i></th>
	      <th><i>CUSTOMER ID</i></th>
	      <th><i>PRODUCT ID</i></th>
	      <th><i>ORDER VALUE</i></th>
	      <th><i>ORDERED UNIT</i></th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['order_id']."</td>";
	      	 echo "<td>". $row['cust_id']."</td>";
	      	 echo "<td>". $row['pro_id']."</td>";
	      	 echo "<td>". $row['order_value']."</td>";
	      	 echo "<td>". $row['unit']."</td>";
	      	 echo "</tr>";
	      }

	      echo "</table>";

	      mysqli_free_result($result);
}
     else{
        echo "No records matching your query were found.";
    }


mysqli_close($connn);
?>

</form>
</div>
</center>
</body>
</html>