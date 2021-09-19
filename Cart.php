<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Cart | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	</style>
</head>
<body>
<?php
include('header.html');                            
?>
<!-- Test Code -->
<div class="container-fluid">
<?php
		if(isset($_COOKIE['mycart']))
		{
			$id=$_COOKIE['mycart'];
			$link= mysqli_connect("localhost","root","");
			if(!$link)
			{
    			die('Something Went Wrong, Contact Support');
			}
			$data=mysqli_select_db($link,"shopping");
			if(!$data)
			{
    			die('Something Went Wrong, Contact Support');
			}
			$que="select * from product_master where p_id='$id'";
			$results=mysqli_query($link,$que);
			//echo $que;
			$tot=0;
			echo "<table class='table table-stripped'>";
			while($row=mysqli_fetch_array($results))
			{
				echo "<tr style='text-align: center'>";
				echo "<td style='text-align: left;'><img src='$row[4]' height='50' width='50' /></td>";
				echo "<td style='font-weight: bold;font-size: 18px;'>$row[1]</td>";
				echo "<td style='font-weight: bold;font-size: 18px;'><span>&#8377;</span>$row[2]</td>";
				//echo "<td><a href='deletecart.php?pid=$row[0]' style='text-decoration: none;'>Delete</a></td>";
				echo "</tr>";
				$tot=$tot+$row[2];
				$p=$row[2];
			}
			echo "</table>";
			echo "<h4 class='text-right'>Total Price: <span>&#8377;</span>$p</h4>";
			echo "<div class='row'>";
			echo "<div class='col-sm-5'></div>";
			echo "<div class='col-sm-2 text-center'><a href='#'><input type='button' class='btn btn-success text-center' style='text-align: center;' value='CHECKOUT' /></a></div>";
			echo "<div class='col-sm-5'></div>";
			echo "</div>";
		}
		else
		{
			echo "<h2 style='text-align: center;'>Cart is empty!</h2>";
		}
		echo "<div class='row' style='height: 280px'></div>";           
?>
 </div>
<?php
include('footermy.html');
?>
</body>
</html>