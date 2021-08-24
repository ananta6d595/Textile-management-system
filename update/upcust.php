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
if(mysqli_query($conn,"UPDATE customer SET address = '$adrs', postal_code='$code', Country='$con' WHERE cust_name = '$name'"))
	   {
	   	
	     echo "<script>location.href='upcust.php?'</script>";
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
		<h2>Customer Update Form</h2>	
	<p><span class = "error">* required field.</span></p>


	<form action ="" method="POST">
		<table style="font-size:20px">
			<tr>
				<td>Customer Name:</td>
				<td><input type="text" name="name">
				<span class = "error">* <?php echo $nameerr;?></span>
			</td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="adrs">
				<span class = "error">* <?php echo $adrserr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Postal/Zipcode:</td>
				<td><input type="number" name="pcode">
				<span class = "error">* <?php echo $codeerr;?></span></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Country:</td>
				
				<td><select name="con" >
					<span class = "error">* <?php echo $conerr;?></span>
					<option value=""> Please Select </option> 
					<option value="United States"> United States </option> 
					<option value="Afghanistan"> Afghanistan </option> 
					<option value="Albania"> Albania </option>
					<option value="Algeria"> Algeria </option> 
					<option value="American Samoa"> American Samoa </option> 
					<option value="Andorra"> Andorra </option> 
					<option value="Angola"> Angola </option> 
					<option value="Anguilla"> Anguilla </option> 
					<option value="Antigua and Barbuda"> Antigua and Barbuda </option> 
					<option value="Argentina"> Argentina </option> 
					<option value="Armenia"> Armenia </option> 
					<option value="Aruba"> Aruba </option> 
					<option value="Australia"> Australia </option> 
					<option value="Austria"> Austria </option> 
					<option value="Azerbaijan"> Azerbaijan </option> 
					<option value="The Bahamas"> The Bahamas </option> 
					<option value="Bahrain"> Bahrain </option> 
					<option value="Bangladesh"> Bangladesh </option> 
					<option value="Barbados"> Barbados </option> 
					<option value="Belarus"> Belarus </option> 
					<option value="Belgium"> Belgium </option> 
					<option value="Belize"> Belize </option> 
					<option value="Benin"> Benin </option> 
					<option value="Bermuda"> Bermuda </option> 
					<option value="Bhutan"> Bhutan </option> 
					<option value="Bolivia"> Bolivia </option> 
					<option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option> 
					<option value="Botswana"> Botswana </option> 
					<option value="Brazil"> Brazil </option> 
					<option value="Brunei"> Brunei </option> 
					<option value="Bulgaria"> Bulgaria </option> 
					<option value="Burkina Faso"> Burkina Faso </option> 
					<option value="Burundi"> Burundi </option> 
					<option value="Cambodia"> Cambodia </option> 
					<option value="Cameroon"> Cameroon </option> 
					<option value="Canada"> Canada </option> 
					<option value="Cape Verde"> Cape Verde </option> 
					<option value="Cayman Islands"> Cayman Islands </option> 
					<option value="Central African Republic"> Central African Republic </option> 
					<option value="Chad"> Chad </option> 
					<option value="Chile"> Chile </option> 
					<option value="China"> China </option> 
					<option value="Christmas Island"> Christmas Island </option> 
					<option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option> 
					<option value="Colombia"> Colombia </option> 
					<option value="Comoros"> Comoros </option> 
					<option value="Congo"> Congo </option> 
					<option value="Cook Islands"> Cook Islands </option> 
					<option value="Costa Rica"> Costa Rica </option> 
					<option value="Croatia"> Croatia </option> 
					<option value="Cuba"> Cuba </option> 
					<option value="Cyprus"> Cyprus </option> 
					<option value="Czech Republic"> Czech Republic </option> 
					<option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option> 
					<option value="Denmark"> Denmark </option> 
					<option value="Djibouti"> Djibouti </option> 
					<option value="Dominica"> Dominica </option> 
					<option value="Dominican Republic"> Dominican Republic </option> 
					<option value="Ecuador"> Ecuador </option>
					 <option value="Egypt"> Egypt </option> 
					 <option value="El Salvador"> El Salvador </option> 
					 <option value="Equatorial Guinea"> Equatorial Guinea </option> 
					 <option value="Eritrea"> Eritrea </option> 
					 <option value="Estonia"> Estonia </option> 
					 <option value="Ethiopia"> Ethiopia </option> 
					 <option value="Falkland Islands"> Falkland Islands </option> 
					 <option value="Faroe Islands"> Faroe Islands </option> 
					 <option value="Fiji"> Fiji </option> 
					 <option value="Finland"> Finland </option> 
					 <option value="France"> France </option> 
					 <option value="French Polynesia"> French Polynesia </option> 
					 <option value="Gabon"> Gabon </option> 
					 <option value="The Gambia"> The Gambia </option> 
					 <option value="Georgia"> Georgia </option> 
					 <option value="Germany"> Germany </option> 
					 <option value="Ghana"> Ghana </option> 
					 <option value="Gibraltar"> Gibraltar </option> 
					 <option value="Greece"> Greece </option> 
					 <option value="Greenland"> Greenland </option> 
					 <option value="Grenada"> Grenada </option> 
					 <option value="Guadeloupe"> Guadeloupe </option> 
					 <option value="Guam"> Guam </option> 
					 <option value="Guatemala"> Guatemala </option> 
					 <option value="Guernsey"> Guernsey </option> 
					 <option value="Guinea"> Guinea </option> 
					 <option value="Guinea-Bissau"> Guinea-Bissau </option> 
					 <option value="Guyana"> Guyana </option> 
					 <option value="Haiti"> Haiti </option> 
					 <option value="Honduras"> Honduras </option> 
					 <option value="Hong Kong"> Hong Kong </option> 
					 <option value="Hungary"> Hungary </option> 
					 <option value="Iceland"> Iceland </option> 
					 <option value="India"> India </option> 
					 <option value="Indonesia"> Indonesia </option> 
					 <option value="Iran"> Iran </option> 
					 <option value="Iraq"> Iraq </option> 
					 <option value="Ireland"> Ireland </option> 
					 <option value="Israel"> Israel </option> 
					 <option value="Italy"> Italy </option> 
					 <option value="Jamaica"> Jamaica </option> 
					 <option value="Japan"> Japan </option> 
					 <option value="Jersey"> Jersey </option> 
					 <option value="Jordan"> Jordan </option> 
					 <option value="Kazakhstan"> Kazakhstan </option> 
					 <option value="Kenya"> Kenya </option> 
					 <option value="Kiribati"> Kiribati </option> 
					 <option value="North Korea"> North Korea </option> 
					 <option value="South Korea"> South Korea </option> 
					 <option value="Kosovo"> Kosovo </option> 
					 <option value="Kuwait"> Kuwait </option> 
					 <option value="Kyrgyzstan"> Kyrgyzstan </option> 
					 <option value="Laos"> Laos </option> 
					 <option value="Latvia"> Latvia </option> 
					 <option value="Lebanon"> Lebanon </option> 
					 <option value="Lesotho"> Lesotho </option> 
					 <option value="Liberia"> Liberia </option> 
					 <option value="Libya"> Libya </option> 
					 <option value="Liechtenstein"> Liechtenstein </option> 
					 <option value="Lithuania"> Lithuania </option> 
					 <option value="Luxembourg"> Luxembourg </option> 
					 <option value="Macau"> Macau </option> 
					 <option value="Macedonia"> Macedonia </option> 
					 <option value="Madagascar"> Madagascar </option> 
					 <option value="Malawi"> Malawi </option> 
					 <option value="Malaysia"> Malaysia </option> 
					 <option value="Maldives"> Maldives </option> 
					 <option value="Mali"> Mali </option> 
					 <option value="Malta"> Malta </option> 
					 <option value="Marshall Islands"> Marshall Islands </option> 
					 <option value="Martinique"> Martinique </option> 
					 <option value="Mauritania"> Mauritania </option> 
					 <option value="Mauritius"> Mauritius </option> 
					 <option value="Mayotte"> Mayotte </option> 
					 <option value="Mexico"> Mexico </option> 
					 <option value="Micronesia"> Micronesia </option> 
					 <option value="Moldova"> Moldova </option> 
					 <option value="Monaco"> Monaco </option> 
					 <option value="Mongolia"> Mongolia </option> 
					 <option value="Montenegro"> Montenegro </option> 
					 <option value="Montserrat"> Montserrat </option> 
					 <option value="Morocco"> Morocco </option> 
					 <option value="Mozambique"> Mozambique </option> 
					 <option value="Myanmar"> Myanmar </option> 
					 <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option> 
					 <option value="Namibia"> Namibia </option> 
					 <option value="Nauru"> Nauru </option> 
					 <option value="Nepal"> Nepal </option> 
					 <option value="Netherlands"> Netherlands </option> 
					 <option value="Netherlands Antilles"> Netherlands Antilles </option> 
					 <option value="New Caledonia"> New Caledonia </option> 
					 <option value="New Zealand"> New Zealand </option> 
					 <option value="Nicaragua"> Nicaragua </option> 
					 <option value="Niger"> Niger </option> 
					 <option value="Nigeria"> Nigeria </option> 
					 <option value="Niue"> Niue </option> 
					 <option value="Norfolk Island"> Norfolk Island </option> 
					 <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option> 
					 <option value="Northern Mariana"> Northern Mariana </option> 
					 <option value="Norway"> Norway </option> 
					 <option value="Oman"> Oman </option> 
					 <option value="Pakistan"> Pakistan </option> 
					 <option value="Palau"> Palau </option> 
					 <option value="Palestine"> Palestine </option> 
					 <option value="Panama"> Panama </option> 
					 <option value="Papua New Guinea"> Papua New Guinea </option> 
					 <option value="Paraguay"> Paraguay </option> 
					 <option value="Peru"> Peru </option> 
					 <option value="Philippines"> Philippines </option> 
					 <option value="Pitcairn Islands"> Pitcairn Islands </option> 
					 <option value="Poland"> Poland </option> 
					 <option value="Portugal"> Portugal </option> 
					 <option value="Puerto Rico"> Puerto Rico </option> 
					 <option value="Qatar"> Qatar </option> 
					 <option value="Republic of the Congo"> Republic of the Congo </option> 
					 <option value="Romania"> Romania </option> 
					 <option value="Russia"> Russia </option> 
					 <option value="Rwanda"> Rwanda </option> 
					 <option value="Saint Barthelemy"> Saint Barthelemy </option> 
					 <option value="Saint Helena"> Saint Helena </option> 
					 <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option> 
					 <option value="Saint Lucia"> Saint Lucia </option> 
					 <option value="Saint Martin"> Saint Martin </option> 
					 <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option> 
					 <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
					 <option value="Samoa"> Samoa </option> 
					 <option value="San Marino"> San Marino </option> 
					 <option value="Sao Tome and Principe"> Sao Tome and Principe </option> 
					 <option value="Saudi Arabia"> Saudi Arabia </option> 
					 <option value="Senegal"> Senegal </option> 
					 <option value="Serbia"> Serbia </option> 
					 <option value="Seychelles"> Seychelles </option> 
					 <option value="Sierra Leone"> Sierra Leone </option> 
					 <option value="Singapore"> Singapore </option> 
					 <option value="Slovakia"> Slovakia </option> 
					 <option value="Slovenia"> Slovenia </option> 
					 <option value="Solomon Islands"> Solomon Islands </option> 
					 <option value="Somalia"> Somalia </option> 
					 <option value="Somaliland"> Somaliland </option> 
					 <option value="South Africa"> South Africa </option> 
					 <option value="South Ossetia"> South Ossetia </option> 
					 <option value="South Sudan"> South Sudan </option> 
					 <option value="Spain"> Spain </option> 
					 <option value="Sri Lanka"> Sri Lanka </option> 
					 <option value="Sudan"> Sudan </option> 
					 <option value="Suriname"> Suriname </option> 
					 <option value="Svalbard"> Svalbard </option> 
					 <option value="eSwatini"> eSwatini </option> 
					 <option value="Sweden"> Sweden </option> 
					 <option value="Switzerland"> Switzerland </option>
					  <option value="Syria"> Syria </option> 
					  <option value="Taiwan"> Taiwan </option> 
					  <option value="Tajikistan"> Tajikistan </option> 
					  <option value="Tanzania"> Tanzania </option> 
					  <option value="Thailand"> Thailand </option> 
					  <option value="Timor-Leste"> Timor-Leste </option> 
					  <option value="Togo"> Togo </option> 
					  <option value="Tokelau"> Tokelau </option> 
					  <option value="Tonga"> Tonga </option> 
					  <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option> 
					  <option value="Trinidad and Tobago"> Trinidad and Tobago </option> 
					  <option value="Tristan da Cunha"> Tristan da Cunha </option> 
					  <option value="Tunisia"> Tunisia </option> 
					  <option value="Turkey"> Turkey </option> 
					  <option value="Turkmenistan"> Turkmenistan </option> 
					  <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option> 
					  <option value="Tuvalu"> Tuvalu </option> 
					  <option value="Uganda"> Uganda </option> 
					  <option value="Ukraine"> Ukraine </option> 
					  <option value="United Arab Emirates"> United Arab Emirates </option> 
					  <option value="United Kingdom"> United Kingdom </option> 
					  <option value="Uruguay"> Uruguay </option> 
					  <option value="Uzbekistan"> Uzbekistan </option> 
					  <option value="Vanuatu"> Vanuatu </option> 
					  <option value="Vatican City"> Vatican City </option> 
					  <option value="Venezuela"> Venezuela </option> 
					  <option value="Vietnam"> Vietnam </option> 
					  <option value="British Virgin Islands"> British Virgin Islands </option> 
					  <option value="Isle of Man"> Isle of Man </option> 
					  <option value="US Virgin Islands"> US Virgin Islands </option> 
					  <option value="Wallis and Futuna"> Wallis and Futuna </option> 
					  <option value="Western Sahara"> Western Sahara </option> 
					  <option value="Yemen"> Yemen </option> <option value="Zambia"> Zambia </option> 
					  <option value="Zimbabwe"> Zimbabwe </option> <option value="other"> Other </option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name ="submit" value="Submit"></td></tr>
	</table>

<?php





$conn=mysqli_connect("localhost","root","","company");

echo "<br><br><br><br><br><h1><i>Customer list</i></h1>";

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

