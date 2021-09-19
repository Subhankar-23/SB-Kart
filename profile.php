<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Profile | SB Kart</title>
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
<?php
if(isset($_SESSION['user'])){
	$email=$_SESSION['email'];
	$link= mysqli_connect("localhost","root","");
	$data=mysqli_select_db($link,"shopping");
	if(!$data)
	{
		die('Something Went Wrong, Contact Support');
	}
	$que="select * from user_master where email='$email'";
	$result=mysqli_query($link,$que);
	$row= mysqli_fetch_array($result);
	if(mysqli_num_rows($result)>0) 
	{
		echo "<div class='container-fluid'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-3'></div>";
		echo "<div class='col-sm-6' style='background-color: #dbf4ff; border-radius:10px;  border-style: solid; border-color: #4f92ff; border-width:1px;'>
		<h3 style='text-align: center; font-weight: bold; padding-top: 0px;'><i> Your Profile </i></h3><p><hr>
		<form class='form-horizontal'>
		<div class='form-group'>
				<div class='col-sm-4' style='font-size: 20px'>
					<label>Your Name</label>
				</div>
				<div class='col-sm-8;' style='text-align: center;font-size: 18px;'>
					<label name='fname'>$row[0]</label>
				</div>
		</div><hr>
		<div class='form-group'>
				<div class='col-sm-4' style='font-size: 20px;text-align: left;'>
					<label>Email Id</label>
				</div>
				<div class='col-sm-8;' style='text-align: center;font-size: 18px;'>
					<label name='fname'>$row[1]</label>
				</div>
		</div><hr>
		<div class='form-group'>
				<div class='col-sm-4' style='font-size: 20px;text-align: left;'>
					<label>Gender</label>
				</div>
				<div class='col-sm-8;' style='text-align: center;font-size: 18px;'>
					<label name='fname'>$row[3]</label></div>
		</div><hr>
		<div class='form-group'>
				<div class='col-sm-4' style='font-size: 20px;text-align: left;'>
					<label>Contact Number</label>
				</div>
				<div class='col-sm-8;' style='text-align: center;font-size: 18px;'>
					<label name='fname'>$row[4]</label></div>
		</div><hr>
		<div class='form-group'>
				<div class='col-sm-4' style='font-size: 20px;text-align: left;'>
					<label>State</label>
				</div>
				<div class='col-sm-8;' style='text-align: center;font-size: 18px;'>
					<label name='fname'>$row[6]</label></div>
		</div><hr>
		<div class='form-group'>
				<div class='col-sm-4' style='font-size: 20px;text-align: left;'>
					<label>Country</label>
				</div>
				<div class='col-sm-8;' style='text-align: center;font-size: 18px;'>
					<label name='fname'>$row[5]</label></div>
		</div><hr>
		</div>
		</form>
		</div>";
		echo "<div class='col-sm-3'></div>";
		echo "</div>";
		echo "<div class='row' style='height: 20px;'></div>";
		echo "</div>";
	}
} 
else{
	header("location: SignUp.php");
}                      
?>

<?php
include('footermy.html');
?>
</body>
</html>