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
	

    $query="UPDATE product SET price='$price' WHERE pro_name='$pname' ";
    $q=mysqli_query($conn,$query);

if($q)
  {
	     echo "<script>location.href='upproduct.php?'</script>";	

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
	<h2>Update New Order</h2>
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
				<td><input type="text" name="price" placeholder="Enter Product Price"  value="$/piece">
				<span class = "error">* <?php echo $priceerr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
	        <td><input type="submit" name="submit" value="ADD"></td></tr>
</table>

</form>
<?php

$conn=mysqli_connect("localhost","root","","company");

$sql="SELECT * FROM product";

$result= mysqli_query($conn,$sql);

echo "<center>";
echo "<h2><i> Product list </i></h2>";

if(mysqli_num_rows($result)>0){
	echo "</br></br></br>";
	echo "<table border='1'>";
	echo "<tr><th><i>PRODUCT NAME</i></th>
	      <th><i>PRICE</i></th>
	      <th><i>PRODUCT ID</i></th>
	      <th><i>CATEGORY ID</i></th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['pro_name']."</td>";
	      	 echo "<td>". $row['price']."</td>";
	      	 echo "<td>".$row['pro_id']."</td>";
	      	 echo "<td>". $row['cat_id']."</td>";
	      	 echo "</tr>";
	      }

	      echo "</table>";

	      echo "</center>";

	      mysqli_free_result($result);
}
     else{
        echo "No records matching your query were found.";
    }


mysqli_close($conn);
?>
</div>
</center>
</body>
</html>