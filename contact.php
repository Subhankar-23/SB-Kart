<?php
	session_start();
	$email= $_POST["uemail"];
	$message=$_POST["msg"];
	if(isset($_POST["msg-sub"])){
		$link=mysql_connect('localhost','root','');
		if(!$link){
			die('Something Went Wrong, Please try again later.');
		}
		$db=mysql_select_db("shopping");
		if(!$db){
			die('Something Went Wrong, Contact Support');
		}
		$qry="insert into query values('$email','$message')";
		mysql_query($qry,$link);
		if(mysql_affected_rows($link)>0){
			$msg="Query Sent Successfully. We will shortly get in touch with you. Happy Shopping :)";
	}
	else{
		header("location:SignUp.php");
	}
}                          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"
	 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	</style>
    
</head>
<body>
<?php
include('header.html');                            
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-1"></div>	
		<div class="col-sm-4">
			<h2 style="font-weight: bold; font-size: 26px; text-shadow: 1px 1px #808080; color: #61a2d4; ">Reach Us</h2>
			<br><i class="icon fas fa-home" style="width: 40px;height: 40px;line-height: 60px;background-color: #3494db;text-align: center;color: #fff;border-radius: 50%;margin-right: 16px;"></i>
			<font style="font-weight: bold; font-size: 18px;">Agartala, Tripura, India</font>

			<br><i class="icon fas fa-envelope" style="width: 40px;height: 40px;line-height: 60px;background-color: #3494db;text-align: center;color: #fff;border-radius: 50%;margin-right: 16px;"></i>
			<font style="font-weight: bold; font-size: 18px;">banik2023@gmail.com</font>

			<br><i class="icon fas fa-clock" style="width: 40px;height: 40px;line-height: 60px;background-color: #3494db;text-align: center;color: #fff;border-radius: 50%;margin-right: 16px;"></i>
			<font style="font-weight: bold; font-size: 18px;">24*7</font>

			<br><i class="icon fas fa-map" style="width: 40px;height: 40px;line-height: 60px;background-color: #3494db;text-align: center;color: #fff;border-radius: 50%;margin-right: 16px;"></i>
			<font style="font-weight: bold; font-size: 16px; text-decoration: none;"><a href="https://goo.gl/maps/9STsxx5hNoS4HFwW6" target="blank">View on Map (Powered by Google)</a></font>
			
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-6"><form method="post">
		<h2 style="font-weight: bold; font-size: 25px; color: #61a2d4; text-shadow: 1px 1px #808080; ">Send Your Message</h2>
		<input type="email" name="uemail" required placeholder="Enter your Email Id" style="width:100%; border-radius:5px;border-style: solid; border-width:1px; border-color: #4f92ff;" />
		<div class="row" style="height: 10px;"></div>
		<textarea name="msg" placeholder="Type your message here. We will try to reach you soon, have a great time ahead!" 
		style="width:100%; height: 140px; border-radius: 5px; border-style: solid; border-width:1px; border-color: #4f92ff;" ></textarea>
		<input type="submit" class="btn active" name="msg-sub" value="SUBMIT" style="width: 100%;color: white; background-color: #61a2d4;" />
		</form></div>
	</div>
	<div class="row" style="height: 76px; font-weight: bold; text-align: center; color: aqua;"><?php echo $msg; ?></div>
</div>

<?php
include('footermy.html');
?>
</body>
</html>