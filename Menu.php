<?php include "DBconnect.php"; ?>
<html>
	<head>
		<title>Utepia Menu</title>
		<link rel="stylesheet" href= "menu.css">
	</head>

<body>
	<div class="left_site_wrapper">
		<div class="logo_with_text">
			<img src="logo.png" alt="Logo" width="200" height="120">   
			<h1>Utepia Delivery</h1>
		</div>
		<div class= "Menu">
			<h2>Profile</h2>
			<h2>Contact Us</h2>
			<h2><u>Menu</u></h2>
			<h2>Cart</h2>
			<h2>History</h2>
			<h2>Orders</h2>
		</div>
	</div>
	<div class="right_site_wrapper">
		<div class="block_wrapper">
			<div class= "categories">
				<label><u><b> Ice tea</b></u></label>
				<label><b> Hot tea</b></label>
				<label><b> Mochi</b></label><br></br>
			</div><br></br>
			<div class="drinks_block">
				<div class= "DrinkItem">
					<form action = "">
					<label><b> Oolong tea with pearls</b></label><br>
					<label><i> Description lorem ipsum, lorem ipsum 
							efwe0fhwheffefwef very cool
							You want it? you buy it!
						</i></label><br></br>
						<img src="oolongtea.png" class="Drink_img" alt="Oolong Tea with pearls" ><br></br>
					<label><b> Price: 1400 KZT</b></label>
					<button id ="add.btn" > add to cart </button>
					</form> 
				</div>

				<div class="DrinkItem">
					<form action="">
						<label><b> Oolong tea with pearls</b></label><br>
						<label><i> Description lorem ipsum, lorem ipsum 
								efwe0fhwheffefwef very cool
								You want it? you buy it!
							</i></label><br></br>
							<img src="oolongtea.png" class="Drink_img" alt="Oolong Tea with pearls" ><br></br>
						<label><b> Price: 1200 KZT</b></label>
						<button type="action" > - </button>
						<label><b> 1 </b></label>
						<button type="action"> + </button>
				</div>
				<div class= "DrinkItem">
					<form action = "">
					<label><b> Oolong tea with pearls</b></label><br>
					<label><i> Description lorem ipsum, lorem ipsum 
							efwe0fhwheffefwef very cool
							You want it? you buy it!
						</i></label><br></br>
						<img src="oolongtea.png" class="Drink_img" alt="Oolong Tea with pearls" ><br></br>
					<label><b> Price: 1400 KZT</b></label>
					<button type="action" > add to cart </button>
					</form> 
				</div>

			</div>
		</div>
	</div>
</body>
</html>




























