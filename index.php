<?php   
session_start();
if(!empty($_SESSION)){
	$is_logged_in=1;
}else{
	$is_logged_in=0;
}
?>
<?php include("includes/header.php"); ?>
	<div class="cover">
		<div class="cover-content">
			<H2 id="zom"><b>kHABI</b></H2>
			<h3 id="zomp" class="mt-3">Discover the best food & drinks in Kolkata</h3>
			<span class="cover-button">
			<input type="text" align="center" name="" placeholder="Search for restaurant,cuisine or a dish" class="form-control mt-4" style="text-align: center; ">
			<button class="btn btn-lg btn-danger mt-3 text-white" style="float: right;">Browse All</button>
			</div>
		</div>
	</div>

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
	<div class="container-fluid pt-3 pb-3" style="background-color: #F7F7F7;">
        <div class="container-lg">
            <h2 class="pb-3">Inspiration for your first order</h2>

            <div class="row">

                <div class="col-3 card p-0 p-2" style="background: none; border:none;">
                    <a href="food.php?x=Momos" style="text-decoration: none; color:black;">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/dish_images/173bc40a5058e328f998f55eed7b7a7f1612459047.png" width="100%" height="200px" alt="" style="border-radius: 8px;"></div>
                        <div class="card-title pt-2 pl-1">
                            <h3>Momos</h3>
                        </div>
                    </a>
                </div>
                <div class="col-3 card p-0 p-2" style="background: none; border:none;">
                    <a href="food.php?x=Biryani" style="text-decoration: none; color:black;">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/homepage_dish_data/4/76d788a2600b609bb0a08443e03df95b.png" width="100%" height="200px" alt="" style="border-radius: 8px;"></div>
                        <div class="card-title pt-2 pl-1">
                            <h3>Biryani</h3>
                        </div>
                    </a>
                </div>
                <div class="col-3 card p-0 p-2" style="background: none; border:none;">
                    <a href="food.php?x=Pizza" style="text-decoration: none; color:black;">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/dish_images/c598d69f4864f3cba4b0de2d8efc0e521612436494.png" width="100%" height="200px" alt="" style="border-radius: 8px;"></div>
                        <div class="card-title pt-2 pl-1">
                            <h3>Pizza</h3>
                        </div>
                    </a>
                </div>
                <div class="col-3 card p-0 p-2" style="background: none; border:none;">
                    <a href="food.php?x=Burger" style="text-decoration: none;color:black;">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/homepage_dish_data/4/6e69685d22c94ffd42ccd7e70e246bd9.png" width="100%" height="200px" alt="" style="border-radius: 8px;"></div>
                        <div class="card-title pt-2 pl-1">
                            <h3>Burger</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
      </div>


    <hr class="m-0">
    <div class="container-fluid pt-2 pb-2">
        <div class="container-lg">
            <h2 class="pb-3">Top brands in spotlight</h2>

            <div class="row">
                <div class="col-2 card p-0 p-3" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn=WOW! Momo">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/brand_creatives/logos/e6a0dc9d06256ffdc331a7d7245fbcc5_1617879709.png?output-format=webp" width="100%" height="160px" alt="" style="border-radius: 8px; box-shadow:2px 2px 5px #ccc"></div>
                    </a>
                    <div class="card-title pt-2 pl-1">

                    </div>
                </div>

                <div class="col-2 card p-0 p-3" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn=KFC">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/brand_creatives/logos/560b209a689eefa9feb367b5d5604097_1611382952.png?output-format=webp" width="100%" height="160px" alt="" style="border-radius: 8px; box-shadow:2px 2px 5px #ccc"></div>
                    </a>
                    <div class="card-title pt-2 pl-1">

                    </div>
                </div>
                <div class="col-2 card p-0 p-3" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn=PizzaHut">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/brand_creatives/logos/c38f7540bcc5a38e918856ac06409056_1504531339.png?output-format=webp" width="100%" height="160px" alt="" style="border-radius: 8px; box-shadow:2px 2px 5px #ccc"></div>
                    </a>
                    <div class="card-title pt-2 pl-1">

                    </div>
                </div>
                <div class="col-2 card p-0 p-3" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn=Subway">
                        <div class=" card-img "><img src="data:image/png;base64,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" width="100%" height="160px" alt="" style="border-radius: 8px; box-shadow:2px 2px 5px #ccc"></div>
                    </a>
                    <div class="card-title pt-2 pl-1">

                    </div>
                </div>
                <div class="col-2 card p-0 p-3" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn=Arsalan">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/brand_creatives/logos/fe5db95ae85292933996d4043f600d3b_1611320738.png?output-format=webp" width="100%" height="160px" alt="" style="border-radius: 8px; box-shadow:2px 2px 5px #ccc"></div>
                    </a>
                    <div class="card-title pt-2 pl-1">

                    </div>
                </div>

                <div class="col-2 card p-0 p-3" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn=KwalityWall">
                        <div class=" card-img "><img src="https://b.zmtcdn.com/data/brand_creatives/logos/f19569affdf177676dc916015a0a12a2_1617875309.png?output-format=webp" width="100%" height="160px" alt="" style="border-radius: 8px; box-shadow:2px 2px 5px #ccc"></div>
                    </a>
                    <div class="card-title pt-2 pl-1">

                    </div>
                </div>

            </div>

        </div>
    </div>
<div class="container-fluid pt-3 pb-3">
        <div class="container-lg">
            <h3 class="pb-3">Best Food in Kolkata</h3>

            <div class="row">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "Zomato");

                $query1 = "SELECT * FROM `products` ";

                $result1 = mysqli_query($conn, $query1);

                while ($row1 = mysqli_fetch_assoc($result1)) {

                    echo ' <div class="col-4 card p-0 p-2" style="background: none; border:none;">
                    <a href="restaurant_details.php?rn='.$row1['restaurant_name'].'" style="text-decoration: none;color:black;" ><div class=" card-img "><img src="' . $row1['image'] . '" width="100%" height="250px" alt="" style="border-radius: 8px;"></div>
                    <div class="card-title pt-2 pl-1 m-0">
                        <h5 class="m-0">' . $row1['name'] . '</h5>
                    </div>
                    <div class="card-text" style="font-size: 17px;">';

                    if ($row1['rating'] >= 4.8 && $row1['rating'] <= 5) {
                        echo '
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on "></span> ';
                    } else if ($row1['rating'] >= 4.4 && $row1['rating'] <= 4.7) {
                        echo '
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star half"></span> ';
                    } else if ($row1['rating'] >= 3.8 && $row1['rating'] >= 4 && $row1['rating'] <= 4.3) {
                        echo '
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star"></span> ';
                    } else if ($row1['rating'] >= 3.4 && $row1['rating'] <= 3.7) {
                        echo '
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star half"></span>
                    <span class="fa fa-star star"></span> ';
                    } else if ($row1['rating'] >= 2.8 && $row1['rating'] >= 3 && $row1['rating'] <= 3.3) {
                        echo '
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span> ';
                    } else if ($row1['rating'] >= 2.4 && $row1['rating'] <= 2.7) {
                        echo '
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star" half></span>
                    <span class="fa fa-star star"></span>
                    <span class="fa fa-star star"></span> ';
                    } else if ($row1['rating'] >= 1.8 && $row1['rating'] >= 2 && $row1['rating'] <= 2.3) {
                        echo '
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span> ';
                    } else if ($row1['rating'] >= 1.4 && $row1['rating'] <= 1.7) {
                        echo '
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star on"></span>
                    <span class="fa fa-star star half"></span> ';
                    } else if ($row1['rating'] >= 1 && $row1['rating'] <= 1.3) {
                        echo '
                        <span class="fa fa-star star on"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span> ';
                    }



                    echo '' . $row1['rating'] . '</div>
                    <div class="card-text" style="font-size: 17px;">' . $row1['category'] . '</div>
                    <div class="card-text" style="font-size: 17px;">₹' . $row1['price'] . '</div></a>
                </div>';
                }

                ?>

            </div>



        </div>
</body>
</html>