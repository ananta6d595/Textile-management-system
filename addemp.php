<?php

session_start();

$nameerr=$salerr=$iderr="";
$name=$sal=$id="";


if(isset($_POST['submit'])){
	if(empty($_POST['name'])){
		$nameerr="name cannot be empty";
	}else{
		$name= $_POST['name'];
	}

	if(empty($_POST['salary'])){
		$salerr="salary can not be empty";
	}else{
		$sal=$_POST['salary'];
	}
	if(empty($_POST['id'])){
		$iderr="required";
	}else{
		$id=$_POST['id'];
		if($id>8)
		{
			$iderr="Must be according to the following table";
		}
	}

	$conn=mysqli_connect("localhost","root","","company");
	

	$query="SELECT * FROM employee WHERE emp_name ='$name'";
    $q=mysqli_query($conn,$query);
    $r=mysqli_num_rows($q);


if($r)
  {
echo "Employee already exists";
	 }
else 
{
   if(mysqli_query($conn,"INSERT INTO employee(emp_name,sallary,dept_id) VALUES ('$name','$sal','$id')"))
	   {
	      
	     echo "<script>location.href='adminprof.php?'</script>";
	   }	

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
	<h2>Employee Add Form</h2>
	<div class="container">

	<p><span class = "error">* required field.</span></p>
	<form action ="#" method="POST">
		<table style="font-size:20px">
			<tr>
				<td>Employee Name:</td>
				<td><input type="text" name="name">
				<span class = "error">* <?php echo $nameerr;?></span>
			</td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Sallary:</td>
				<td><input type="text" name="salary">
				<span class = "error">* <?php echo $salerr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Department ID:</td>
				<td><input type="number" name="id">
				<span class = "error">* <?php echo $iderr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
	<td><input type="submit" name="submit" value="ADD"></td></tr>
</table>
			<p>
				<center><h2><i>Department table:</i></h2>
				<?php 
				$conn=mysqli_connect("localhost","root","","company");

$sql="SELECT * FROM department";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	echo "</br></br></br></br></br></br>";
	echo "<table border='2'>";
	echo "<tr><th>DEPARTMENT ID</th>
	      <th>DEPARTMENT NAME</th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['dept_id']."</td>";
	      	 echo "<td>". $row['dept_name']."</td>";
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

</center>
</p>
</form>
</div>
</center>
</body>
</html>