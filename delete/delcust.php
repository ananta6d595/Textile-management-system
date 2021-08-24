<?php

session_start();

$nameerr=$adrserr=$codeerr=$conerr="";
$name=$adrs=$code=$con="";

$conn=mysqli_connect("localhost","root","","company");

if(isset($_POST['submit'])){
	if(empty($_POST['name'])){
		$nameerr="name cannot be empty";
	}else{
		$name= $_POST["name"];
	}

	if(empty($_POST['adrs'])){
		$adrserr="address can not be empty";
	}else{
		$adrs=$_POST['adrs'];
	}
	if(empty($_POST['pcode'])){
		$codeerr="required";
	}else{
		$code=$_POST['pcode'];
	}
	if (empty($_POST['con'])){
		$conerr="please select a country";
	}else{
		$con=$_POST['con'];
	}

	$query="select * from customer where cust_name ='$name'";
    $q=mysqli_query($conn,$query);
    $r=mysqli_num_rows($q);


if($r)
  {
//OR postal_code = '$code' OR country = '$con'
if(mysqli_query($conn,"DELETE FROM customer WHERE cust_name = '$name'"))
	   {
	   	
	     echo "<script>location.href='delcust.php?'</script>";
	   }
	 }
else 
{
  echo "Customer dosen't exist!";
	      
}
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
      			color:black;
      			font-size:30px;
      		}



      	.container{
      		border:0px solid black;
      		width:500px;
      		margin:2rem auto;
      		padding:2rem;
      		background: white;
      		background-color: skyblue;
      		opacity : .78;

      	}

         .error {color: #FF0000;}
      </style>
   </head>
<body style="background-image: url(img.jpg)">
	<div class="header">
		<marquee behavior="scroll" direction="left"><h1><i>XYZ Textile Ltd.</i></h1></marquee>
		
	</div>
	<center>
	
	<div class="container">
		<h2>Customer delete Form</h2>	
	<p><span class = "error">* required field.</span></p>

	<form action ="" method="POST">
		<table style="font-size:20px">
			<tr>
				<td>Customer Name:</td>
				<td><input type="text" name="name">
				<span class = "error">* <?php echo $nameerr;?></span>
			</td>
			</tr>
			<td><input type="submit" name="submit" value="Delete"></td></tr>


<?php



$conn=mysqli_connect("localhost","root","","company");

echo "<h1><i>Customer list</i></h1>";

$sql="SELECT * FROM customer";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
		
	echo "<table border='1'>";
	echo "<tr><th>CUSTOMER ID</th>
	      <th>CUSTOMER NAME</th>
	      <th>ADDRESS</th>
	      <th>POSTAL CODE </th>
	      <th>COUNTRY</th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['cust_id']."</td>";
	      	 echo "<td>". $row['cust_name']."</td>";
	      	 echo "<td>". $row['address']."</td>";
	      	 echo "<td>". $row['postal_code']."</td>";
	      	 echo "<td>". $row['Country']."</td>";
	      	 echo "</tr>";
	      }

	      echo "</table>";

	      mysqli_free_result($result);
}
     else{
        echo "No records matching your query were found.";
    }

// Close connection
mysqli_close($conn);
?>
</form>
</center>
</div>


</body>
</html>

