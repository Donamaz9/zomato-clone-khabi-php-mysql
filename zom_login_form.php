<?php
session_start();
if(!empty($_SESSION)){
	header('Location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<script 
	src="https://code.jquery.com/jquery-3.6.0.js" 
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.container{
		max-width: 350px;
	}
</style>
<body>
	<div class="container">
		<div align="center">
			<img src="https://theshillongtimes.com/wp-content/uploads/2020/04/Zomato-logo.png"style="width: 150px;height: 80px;">
		</div>
		<div class="card p-3">
			<h3>Log In</h3>
			<?php
				if(!empty($_GET)){
					if($_GET['error']==1){
						echo'<p style="color:red;">Incorrect Email</p>';
					}
			
				}
				?>


			<form action="zom_login_validation.php" method="POST">
				<label>Email</label>
				<input type="email" name="email" class="form-control"><br>
				<label>Password</label>
				<input type="password" name="password" class="form-control"><br>
				<input type="submit" name="" class="btn  btn-block text-white mt-4" value="Login" style="border-radius: 10px; background-color:  #EF4F5F;"><hr>
			</form>
			
			<div align="center">
			<small class="mt-2" style="font-size:17px;">New to Zomato?<a href="zom_registration.php">Sign in</a></small>
		</div>
		</div>
		
	</div>
</body>
</html>