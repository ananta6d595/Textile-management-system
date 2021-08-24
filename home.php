<!DOCTYPE html>
<html>
<head>
<style>
#container{
background-image:url(i1.jpg);
padding: 100px;
margin: 100px;
}
#header{
width:500px;
text-align:center;
color:#20DFB2;
font-size:25px;
margin:auto;}
*{
margin:0px;
padding:0px;
}

#navbar ul{
list-style:none;
}
#navbar ul li{
background-color:#300F39;
width:150px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color:white;
font-size:18px;
}
#navbar ul li:hover{
background-color:#23664A;}
</style>
<meta charset="utf-8">
</head>
<body>
<div id="container">
<div id="header">
<h1> XYZ Textile Company</h1>
</div></br></br></br>
<div id="navbar">
<ul>
<li>Home</li>
<li>About Us</li>
<li>Branches</li>
<li>Contact</li>
<li><a class="log-in" href="index.php?con=12">Login</a></li>
<li><a class="registration" href="reg.php?con=11">Sign Up</a></li>
</ul>
</div>
</div>
</body>
</html>


<?php
include("config.php");

?>