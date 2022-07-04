<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "Zomato");
if (!empty($_SESSION['user_id'])) {
	$is_logged_in = 1;
} else {
	$is_logged_in = 0;
}

?>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>zomato</title>
	<hr class="m-0">
</head>

<body>
<div class="row mt-2">
			<h1 style="margin-left:auto;margin-right:auto">Order Summary</h1>
		</div>
		<hr>
	<div class="container">
		
		
		<div class="row mt-5"><img style="margin-left:auto;margin-right:auto;height: 280px;" src="https://icon-library.com/images/new-order-icon/new-order-icon-21.jpg" alt=""></div>
		<h3 style="text-align:center" class="mt-5">Super! your order has been confirmed </h3>
		<h5 style="text-align:center" class="mt-3">Your food will reach you within 30 mins</h5><hr>
		<div class="card" style="box-shadow: 1px 1px 5px gray; max-width:600px; margin-left:auto;margin-right:auto;" >
			<div class="row mt-5"><img style="margin-left:auto;margin-right:auto ;height: 220px;" src="https://i.pinimg.com/originals/b5/94/dc/b594dc8e86021865f9f10fe12ed91bb3.jpg" alt=""></div>
			<h4 style="text-align:center;font-style: italic;" class="mt-5">Tired of fake people? Get some natural friends- Plant a tree today!</h4>
			<h5 style="text-align:center" class="mt-3 text-muted">You paid:Rs.<?php  echo $_GET['amount'] ?> ( Additional Rs. 5 for a sappling)</h5>
			<h6 style="text-align:center" class="mt-2">Thank You for contributing to save the enviroment!<img style="height: 50px;"src="https://media.istockphoto.com/vectors/earth-globe-realistic-illustration-vector-id1292193960?k=20&m=1292193960&s=612x612&w=0&h=JSWX9FHgDTDiRp48PBhzGoNYC6nj1U7nmI1lztZKJuk="></h6>
			
		</div>
		<div class="row mt-5" style="background-color: #ccc;">
			<h3 class="m-3 pl-5">CONTACT ZOMATO</h3>
		</div>
		<a href=""  class="row" style="text-decoration: none; color:gray" >
			<h4 class="m-3 pl-5">Chat With Zomato Support</h4>
		</a>
		<div class="row " style="background-color: #ccc;">
			<h3 class="m-3 pl-5">ORDER DETAILS</h3>
		</div>
		<?php
		$order_id=$_GET['order_id'];
		$amount=$_GET['amount'];
		$query="SELECT * FROM `orders` o JOIN `order_address` a ON o.`user_id` = a.`user_id` WHERE  o.`order_id`='$order_id'";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
		?>
		<h5 class="pl-5 pt-3">ORDER NUMBER</h5>
		<h5 class="pl-5 text-muted"><?php echo $order_id; ?></h5>
		<h5 class="pl-5 pt-3">AMOUNT</h5>
		<h5 class="pl-5 text-muted"><?php echo $amount; ?> Rs. 5 Extra For a Sapling</h5>
		<hr>
		<h5 class="pl-5 pt-3">PAYMENT</h5>
		<h5 class="pl-5 text-muted">Paid: Using <?php echo $row['payment_method']; ?></h5>
		<hr>
		<h5 class="pl-5 pt-3">DATE</h5>
		<h5 class="pl-5 text-muted"><?php echo $row['date']; ?></h5>
		<hr>
		<h5 class="pl-5 pt-3">PHONE NUMBER</h5>
		<h5 class="pl-5 text-muted"><?php echo $row['phone']; ?></h5>
		<hr>
		<a href="zom_my_orders.php" class="btn btn-danger btn-block p-2 mb-5"><h5>Go to your Orders</h5></a>
		
	</div>
</body>

</html>