<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			box-sizing: border-box;

		}
		body{
			margin:0;
			background:gray;
		}
		nav{
			background-color: #594848;
			width:100%;
			overflow: auto;
		}
		ul{
			margin: 0;
			padding:0;
			list-style: none;
		}
		li{
			float:left;
		}
		nav a{
			width:120px;
			display: block;
			text-decoration:none;
			text-align: center;
			background:#594848;
			font-size: 17px;
			color: white;
			padding:20px 10px;
			font-family: Arial;
		}

		.container{
			max-width: 1200px;
			margin:auto;
			background:#f2f2f2;
			overflow: auto;
		}
		.gallary{
			margin:5px;
			border:1px solid #ccc;
			float:left;
			width:390px;
		}
		.gallary img{
			width:100%;
			height:auto;
		}
		.desc{
			padding:15px;
			text-align:center;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">Gallary</a></li>
		</ul>
	</nav>

	<div class="container">
		<div class="gallary">
			<img src = "bg.jpg">
			<div class="desc">description</div>
		</div>
		<div class="gallary">
			<img src = "i8.jpg">
			<div class="desc">description</div>
		</div>
		<div class="gallary">
			<img src = "i9.png">
			<div class="desc">description</div>
		</div>
		<div class="gallary">
			<img src = "i6.jpg">
			<div class="desc">description</div>
		</div>
		<div class="gallary">
			<img src = "i12.jpg">
			<div class="desc">description</div>
		</div>
	</div>

</body>