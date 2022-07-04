<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zomato</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<script 
	src="https://code.jquery.com/jquery-3.6.0.js" 
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.cover{
			background-image: url(img/1stimage.jpg);
			width: 100%;
			height: 420px;
			position: relative;
			background-size: cover;
			background-repeat: no-repeat;
		}
		.cover-content{
			max-width: 500px;
			margin: auto;
			padding: 40px;
		}
		#zom{
			display: block;
			font-weight: bolder;
			color: white;
			text-align: center;
			font-size: 80px;
			font-style: italic;
			margin: 0px;
			font-family: Verdana,Okra, Helvetica, sans-serif;
		}
		#zomp{
			clear: both;
			display: inline-block;
			overflow: hidden;
			white-space: nowrap;
			color: white;
			text-align: center;
			font-weight:light ;
			font-size: 33px;
			font-family: Verdana,Okra, Helvetica, sans-serif;


		}
		.delivery:visited{
			color: black;
		}
		
</style>
<body>
	<div class="container-fluid p-2" style="max-width:2700px;">
	<nav class="navbar bg-nav" style="background-color: #EF4F5F;">
		<img src="img/KHabi.jpg" style="width:120px;height:50px;">
		
		<?php 
		if($is_logged_in){
				echo '<div class="dropdown">
			  <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#EF4F5F;">
			    '."Hi! ".$_SESSION['name'].'
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="zom_my_orders.php">My Orders</a>
			    <a class="dropdown-item" href="zom_cart.php">My Cart</a>
			    <a class="dropdown-item" href="index.php">Home</a>
			    <a class="dropdown-item" href="zom_logout.php">Logout</a>
			  </div>
			</div>';
		}else{
			echo'
				<a href="zom_login_form.php"><small><li class="text-white" style="float:right;list-style-type:none; font-size:25px;">Log In</h5></small></li></a>
				
				<a href="zom_registration.php"><small><li class="text-white  mr-1" style="float:right;list-style-type:none; font-size:25px">Sign Up</small></li></a>
				';
		}
		?>

	</nav>
