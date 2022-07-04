
<?php
session_start();
$conn=mysqli_connect("localhost","root","","Zomato"); 
$order_id = $_POST['order_id'];
$amount = $_POST['amount'];
$address=$_POST["x"];
$user_id = $_SESSION['user_id'];
$query = "UPDATE `orders` SET `address`='$address' WHERE `order_id`='$order_id'";
if(mysqli_query($conn,$query)){
    header('location:zom_payment_mode.php?order_id='.$order_id.'&amount= '.$amount.'');
	}else{
		header('location:zom_show_address.php');
	}
?>	
