<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "company");

if(!$connect){
   die("Could Not Connect:".mysqli_connect_error());
}
else{

   $department=test_input($_POST['department']);
   $message=test_input($_POST['message']);
 
	$sql = "UPDATE department SET messageman ='$message' WHERE dept_name = '$department'";
	if(mysqli_query($connect, $sql))
   	{
   		echo "success";
   	}
      mysqli_close($connect);
}

function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}

/*$connect = new mysqli("localhost", "root", "", "company");

if($connect->connect_error){
   echo "Could Not Connect to database";
}

	
	$sql = "UPDATE department SET messageman =? WHERE dept_name =?";
	$stm = $connect->prepare($sql);
	$stm -> bind_param('ss', $message, $department);
	$stm ->execute();
	
	if($stm->error)
	{
		echo 'failure'; 
	}else{
		echo 'success';
	}

	$stm->close();*/


?>