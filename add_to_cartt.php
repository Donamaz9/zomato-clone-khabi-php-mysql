<?php 
session_start();
$conn=mysqli_connect("localhost","root","","Zomato");
if(!empty($_GET['product_id'])){
	$product_id = $_GET['product_id'];
	$user_id = $_SESSION['user_id'];
	//insert into database
	$query="INSERT INTO `cart` VALUES (NULL,'$user_id',$product_id,1)";
	if (mysqli_query($conn,$query)){
		header('Location:zom_cart.php');
	}else{
		header('Location:index.php');
	}
}
else{
   header('location:index.php');
}

?>