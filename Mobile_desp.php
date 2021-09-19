<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Description | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Rubik&display=swap'); 
	.col-sm-4{
		font-weight: bold;
		font-family: Arial;
		font-size: 17px; 
	}
	</style>
</head>
<body>                             
<?php
include('header.html');                                                  
?>                                                                      
<!-- Description Code -->           
<div class="container-fluid">     
<?php
$pid=$_GET['pid'];
$link= mysqli_connect("localhost","root","");
$data=mysqli_select_db($link,"shopping");
if(!$data)
{
    die('Something Went Wrong, Contact Support');
}
$que="select * from product_master where p_id='$pid'";
$result=mysqli_query($link,$que);
$row= mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)            //Display Tab
{
	echo "<div class='row'>";
	echo "<div class='col-sm-1'></div>";
	echo "<div class='col-sm-3'><img src='$row[4]' width='150px' height='230px' title='$row[0]' /></div>";
	echo "<div class='col-sm-1'></div>";
	echo "<div class='col-sm-6'>
			<div class='row'>
			<div class='col-sm-12' style='font-weight: bold; color: #1ca2e6; font-size: 35px;'>$row[1]     
			</div></div>
			<div class='row'>
			<div class='col-sm-12'>
			<font style='color: black; font-size:15px;'>Buy Now to get maximum <b style='color: red;'>40% cashback</b></font>
			<br><br><div class='price' style='color:blue;font-size:25px;'>Price: <span>&#8377;</span>$row[2]</div>
			</div></div>
			<div class='row'>
			<a href='orderM.php?pid=$pid'><div class='col-sm-12'><br><br><input type='button' name='buy' style='width:30%;font-weight: bold;' class='btn btn-success' value='Buy Now' /></a>     
			<a href='mycart_logic.php?pid=$pid&page=Mobile_desp'><input type='button' name='buy' style='width:30%;font-weight: bold; background-color:#a5bee6;' class='btn' value='Add to Cart' /></a>
			</div></div>
		</div>";
	echo "<div class='col-sm-1'></div>";
	echo "</div>";
}
else{
	echo "Something Went Wrong...";
}
$con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shopping");
if(!$db)
{
    die('Something Went Wrong, Contact Support');
}
$qry="select * from mobile_specification where p_id='$pid'";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result)>0)     //Specification Table     
 {
	echo "<hr>"; 
	echo "<font style=' color: #1ca2e6; font-size: 20px;'>Specifications<br></font>";
 	$row= mysqli_fetch_array($result);
	echo "<div class='row' style='padding-top:18px;'>";
	echo "<div class='col-sm-4' >Model Name</div>";
	echo "<div class='col-sm-6' >$row[1]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Model Number</div>";
	echo "<div class='col-sm-6' >$row[2]</div>";
	echo "</div>";	

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Colour</div>";
	echo "<div class='col-sm-6' >$row[3]</div>";
	echo "</div>";	

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >SIM Type</div>";
	echo "<div class='col-sm-6' >$row[4]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Display Size</div>";
	echo "<div class='col-sm-6' >$row[5]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >OS</div>";
	echo "<div class='col-sm-6' >$row[6]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Processor Core</div>";
	echo "<div class='col-sm-6' >$row[7]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >RAM</div>";
	echo "<div class='col-sm-6' >$row[8]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Internak Storage</div>";
	echo "<div class='col-sm-6' >$row[9]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Primary Camera</div>";
	echo "<div class='col-sm-6' >$row[10]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Network Type</div>";
	echo "<div class='col-sm-6' >$row[11]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Battery Capacity</div>";
	echo "<div class='col-sm-6' >$row[12]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Weight</div>";
	echo "<div class='col-sm-6' >$row[13]</div>";
	echo "</div>";

	echo "<div class='row' style='font-size: 15px; padding-top:18px;'>";
	echo "<div class='col-sm-4' >Warranty Period</div>";
	echo "<div class='col-sm-6' >$row[14]</div>";
	echo "</div>";

	echo "<div class='row' style='height: 35px;'></div>";
}
else 
{
 	echo "No Recored Found!!!";   
}         
?>
</div>  
<?php
include('footermy.html');
?>
</body>
</html>