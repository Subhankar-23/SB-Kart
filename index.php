<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	.box
    {
		width: 210px;
        height: 236px;
        margin-bottom: 5px;
        text-align: center;
        font-weight: bold;
        margin-left: 6px;
        margin-right: 6px;
        margin-top: 10px;
        font-size: 16px;
        font-family: Arial;
        box-shadow: 0 0 4px 0 #61a2d4;
        box-align: center;
        border-radius: 7px;
    }
	</style>
</head>
<body>
<?php
include('header.html');
?>
<!-- Home Page Code -->
<div class="container-fluid">
	<div class="row">
	<div class="col-sm-12" style="">
		<a href="Mobile.php"><img  src="images/banner.jpg" alt="First slide" style="width: 100%; height: 280px;">
		<div class="container">
            <div class="carousel-caption relative">
			 <h1 style="font-weight: bold;">Upto 25% Flat Sale</h1>
             <p>New Brands with lots of variety and specifications
             <br> of new era. Grab the chance to get discounted products.</p>     
            </div>
        </div>
		</a></img>
	</div>
	</div>
	<h2 class="text-center text-uppercase bg-info" style="color:#42cbf5;font-family: Bevan;"><i>Laptops</i></h2>
	<?php
		include('Ldisp.php');
	?>
	<h2 class="text-center text-uppercase bg-info" style="color:#42cbf5;font-family: Bevan;"><i>Cameras</i></h2>
	<?php
		include('Cdisp.php');
	?>
	<h2 class="text-center text-uppercase bg-info" style="color:#42cbf5;font-family: Bevan;"><i>Mobiles</i></h2>
	<?php
		include('Mdisp.php');
	?>
	<h2 class="text-center text-uppercase bg-info" style="color:#42cbf5; font-family: Bevan;"><i>Offers</i></h2>
	<div class="row">
	<div class="col-sm-6" style="text-align: center;">
		<a href="Mobile.php"><img  src="images/about.png" alt="offer" style="height: 350px;width: 290px;">
		</img></a>
	</div>
	<div class="col-sm-6" style="text-align: ;">
		<h3 style="font-size: 35px;text-align: left;">Latest and bestselling</h3>
		<h3 style="font-size: 35px;text-align: left;padding-left: 68px;">smartphones</h3>
		<h2 style="font-weight: bold;text-align: left;padding-left: 49px;">All about 50% off</h2>
		<h3 style="padding-left: 0px;padding-top: 0px;text-align: left;">on mobile phones & accessories</h3>
		<img src="images/offer.jpg" style="text-align: left;padding-left: 0px;padding-top: 10px;"></img>
	</div>
	</div>
	<div class="row" style="height: 10px"></div>
</div>  
<?php
include('footermy.html');
?>
</body>
</html>