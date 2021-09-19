<?php 
session_start();                     
if(isset($_POST["signin-sub"])){
	$link=mysqli_connect('localhost','root','');
	if(!$link){
		die('Something Went Wrong, Please try again later.');
	}
	$db=mysqli_select_db($link,"shopping");
	if(!$db){
		die('Something Went Wrong, Contact Support');
	}
	$users=$_POST['username'];
	$password=$_POST['password'];
	$qry="select * from user_master where email='$users' AND password='".$_POST['password']."'";
	$result=mysqli_query($link,$qry);
	$row= mysqli_fetch_array($result);
	if ($result) {
		if(mysqli_num_rows($result)==1){
			$_SESSION['user']=$row[0];
			$_SESSION['email']=$row[1];
			if(isset($_POST["csi"])){
				setcookie("username","$users",time()+120);
				setcookie("password","$password",time()+110);
			}
			header("location: index.php");
			exit();
		}
		else{
			//Login Failed
			$msg="UserName or Password is incorrect, try again...";
			header("location: Signin.php");
			exit();
		}
	}
}/*
else{
	header("location:SignIn.php");
}   */                          
?> 

<!DOCTYPE html>
<html>
<head>
	<title>SignIn | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	</style>
	<script>
		function Check()
		{
			temp=true;
			v1=document.getElementById("b1").value;
			v2=document.getElementById("b2").value;
			if(v1==""){
				temp=false;
				document.getElementById("b1").style="border-color: red";
				document.getElementById("d1").innerHTML="Enter User Name";
			}
			else{
				document.getElementById("b1").style="";
			}

			if(v2==""){
				temp=false;
				document.getElementById("b2").style="border-color: red";
				document.getElementById("d2").innerHTML="Enter User Name";
			}
			else{
				document.getElementById("b2").style="";
			}

			return temp;
		}
	</script>
</head>
<body>
<?php                       
include('header.html');                              
?>
                    
<!-- SignIn Code -->
<div class="container-fluid">
    <div class="row">
		<div class="col-sm-3"  style="height: 50px;"></div>
		
		<div class="col-sm-6" style="background-color: #dbf4ff; border-radius:10px; border-style: solid;border-width:1px; border-color: #4f92ff; "><p>
			<h3 style="text-align: center; font-weight: bold; padding-top: 0px;"><i> SignIn to SB Kart </i></h3><p><hr>
			<form class="form-horizontal" method="post" onsubmit="return Check()">
				<div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>User Name<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="text" id="b1" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" class="form-control" placeholder="Email Id is your username" />
					<div id="d1" style="color: red;"></div>
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Password<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="password" id="b2" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" class="form-control" placeholder="Password" />
					<div id="d2" style="color: red;"></div>
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-12" style="text-align: ; font-size: 12px"><input type="checkbox" name="csi" value="ON" />
					<label>Remember Me :)</label>
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-12" style="text-align: center; font-size: 20px">
					<input type="reset" class="btn btn-danger" value="RESET" />&nbsp &nbsp
					<input type="submit" name="signin-sub" class="btn btn-success" value="SUBMIT" />
				</div>
				<p>
				</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<div class="row" style="height: 55px;">
		<?php
		echo "<span style=\"color: red;font-weight: bold; text-align: center;\">$msg</span>";                            
		?>
	</div>
</div>  
<?php
include('footermy.html');
?>
</body>
</html>