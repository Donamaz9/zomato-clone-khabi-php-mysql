<?php   
session_start();
$conn = mysqli_connect("localhost", "root", "", "Zomato");
if(!empty($_SESSION)){
	$is_logged_in=1;
}else{
	$is_logged_in=0;
}
?>
<?php include("includes/header.php"); ?>
<body>
		<div class="container">
		<div class="row" style="max-width:78%;margin-left: 80px;">
			<div class="col-4 p-2" style="border-bottom: 2px solid #FF7575;">
				<img src="https://b.zmtcdn.com/data/o2_assets/c0bb85d3a6347b2ec070a8db694588261616149578.png?output-format=webp" height="60px" width="60px" alt="" style="background-color:#FFE6B7;border-radius: 50%;" class="p-2">
				<a href="">
					<h5 class="delivery" style="display: inline-block; color: #FF7575;">Delivery</h5>
				</a>
			</div>
			<div class="col-4 p-2">
				<img src="https://b.zmtcdn.com/data/o2_assets/30fa0a844f3ba82073e5f78c65c18b371616149662.png"height="60px" width="60px" alt="" style="background-color:#FFE6B7;border-radius: 50%;" class="p-2">
				<a href="">
					<h5 class="dining_out" style="display: inline-block; color: #ccc;">Dining Out</h5>
				</a>
			</div>

			<div class="col-4 p-2">
				<img src="https://b.zmtcdn.com/data/o2_assets/855687dc64a5e06d737dae45b7f6a13b1616149818.png"height="60px" width="60px" alt="" style="background-color:#FFE6B7;border-radius: 50%;" class="p-2">
				<a href="">
					<h5 class="nightlife" style="display: inline-block; color: #ccc;">Nightlife</h5>
				</a>
			</div>
		</div>
	</div>
	<hr class="m-0">
	<div class="container-fluid pt-3 pb-3">
		<div class="container-lg ">
			<h2 class="pb-3"> <?php echo $_GET['x']; ?>In kolkata</h2>
			<div class="row">
				<?php
				$food=$_GET['x'];
            	$query1 = "SELECT * FROM `products` WHERE `category` LIKE '%$food%'";
           	    $result1 = mysqli_query($conn, $query1);
           	    while ($row1 = mysqli_fetch_assoc($result1)){
	           	    	echo'<div class="col-4 card p-0 p-2" style="background: none; border:none;">
							<a href="restaurant_details.php?rn='.$row1['restaurant_name'].'" style="text-decoration: none;color:black;">'.$row1['restaurant_name'].'</a>
							<div class="card-img">
								<img src="'.$row1['image'].'" class="card-img-top"width="100%" height="250px" alt=""style="border-radius: 8px;>
							</div>
							<div class="card-title pt-2 pl-1">
								<h4 class="m-0">'.$row1['name'].'</h4> 
							</div>
							<div class="card-text"style="font-size: 20px;">
							<p class="text-muted">'.$row1['rating'].'</p>

							</div>
								
						</div>';
           	    }


				?>
				
				</div>
			</div>
		</div>
	</div>

</body>
</html>