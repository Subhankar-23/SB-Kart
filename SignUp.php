<?php
	session_start();
	$name= $_POST["fname"];
	$email= $_POST["email"];
	$password= $_POST["pass"];
	$gender= $_POST["gen"];
	$phone= $_POST["num"];
	$country= $_POST["country"];
	$state= $_POST["state"];
	if(isset($_POST["signup-sub"])){
		$link=mysql_connect('localhost','root','');
		if(!$link){
			die('Something Went Wrong, Please try again later.');
		}
		$db=mysql_select_db("shopping");
		if(!$db){
			die('Something Went Wrong, Contact Support');
		}
		$qry="insert into user_master values('$name','$email','$password','$gender',$phone,'$country','$state')";
		mysql_query($qry,$link);
		if(mysql_affected_rows($link)>0){
			$msg="SignUp Successfully Done!.....Continue Shopping......SB KART";
	}
	else{
		header("location:SignUp.php");
	}
}                          
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	</style>
	<script>
		function ValidateForm()
		{
			temp=true;
			v1=document.getElementById("s1").value;
			v2=document.getElementById("s2").value;
			v3=document.getElementById("s3").value;
			v4=document.getElementById("s4").value;
			v6=document.getElementById("s6").value;
			v8=document.getElementById("s8").value;
			m1='Please fill the required fields';
			if(v1==""){
				
				temp=false;
				document.getElementById("s1").style="border-color: red";
				document.getElementById("d1").innerHTML="Enter Your Name";
			}
			else{
				document.getElementById("s1").style="";
				document.getElementById("s1").innerHTML=" ";
			}

			if(v2==""){
				temp=false;
				m2='Enter Email'
				document.getElementById("s2").style="border-color: red";
				document.getElementById("d2").innerHTML="Enter Email Id";     //alert(m2);
			}
			else{
				document.getElementById("s2").style="";
			}

			if(v3==""){
				temp=false;
				document.getElementById("s3").style="border-color: red";
				document.getElementById("d3").innerHTML="Enter Password for Security Purpose";
			}
			else{
				document.getElementById("s3").style="";
			}

			if(v4==""){
				temp=false;
				document.getElementById("s4").style="border-color: red";
				document.getElementById("d4").innerHTML="Re-type Password";
			}
			else{
				document.getElementById("s4").style="";
			}

			if(v6==""){
				temp=false;
				document.getElementById("s6").style="border-color: red";
				document.getElementById("d6").innerHTML="Enter Mobile Number";
			}
			else{
				document.getElementById("s6").style="";
			}

			if(v8==""){
				temp=false;
				document.getElementById("s8").style="border-color: red";
				document.getElementById("d8").innerHTML="Enter Your Country Name";
			}
			else{
				document.getElementById("s8").style="";
			}

			v3=document.getElementById("s3").value;
			v4=document.getElementById("s4").value;
			if(v3!=v4)
			{
				document.getElementById("c1").innerHTML="Password Not Matched!";
				temp=false;
			}
			else{
				document.getElementById("c1").innerHTML="";
			}

			function ValidateEmail()
			{
				email=document.getElementById("s2").value;
				obj=new XMLHttpRequest();
				obj.open("get","validateemail.php?eid="+email,true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.status==200 && obj.readyState==4)
					{
						c1=obj.responseText;
						document.getElementById("c1").innerHTML=c1;
					}
				}
			}

			return temp;
		}
	</script>
</head>
<body>
<?php
include('header.html');                            
?>
<?php
	echo "<span style=\"color: red;font-weight: bold; text-align: center;\">$msg</span>";                            
?>
<!-- SignUp Code -->
<div class="container-fluid">
    <div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" style="background-color: #dbf4ff; border-radius:10px;  border-style: solid; border-color: #4f92ff; border-width:1px;">
		<p>
			<h3 style="text-align: center; font-weight: bold; padding-top: 0px;"><i> SignUp to SB Kart </i></h3><p><hr>
			<form class="form-horizontal" method="post" onsubmit="return ValidateForm()">
				<div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Full Name<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="text" id="s1" name="fname" class="form-control" placeholder="Full Name"  />
					<div id="d1" style="color: red;"></div>
				</div>
				
				</div>
				      
                <div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Email Id<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="email" onchange="ValidateEmail()" id="s2" name="email" class="form-control" placeholder="Email ID" />
					<div id="d2" style="color: red;"></div><div id="c1" style="color: red;"></div>
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Password<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="password" id="s3" name="pass" class="form-control" placeholder="Password"  />
					<div id="d3" style="color: red;"></div>
				</div>
				</div>

                <div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Confirm Password<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="password" id="s4" class="form-control" placeholder="Re-enter Password"  />
					<div id="d4" style="color: red;"></div>
					<div id="c1" style="color: red;"></div>
				</div>
				</div>

                <div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Gender</label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<select class="form-control" name="gen" id="s5">
                        <option selected>--Select Gender--</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Prefer not to say</option>
                    </select>
				</div>
				</div>

                <div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Mobile Number<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="tel" id="s6" name="num" class="form-control" placeholder="Mobile Number"  maxlength="10" />
					<div id="d6" style="color: red;"></div>
				</div>
				</div>

                <div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>State</label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="text" id="s7" name="state" class="form-control" placeholder="State Name" />
				</div>
				</div>

                <div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Country<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="text" id="s8" name="country" class="form-control" placeholder="Country Name"  />
					<div id="d8" style="color: red;"></div>
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-12" style="text-align: center; font-size: 20px">
					<input type="reset" id="s9" class="btn btn-danger" value="RESET" />&nbsp &nbsp
					<input type="submit" id="s10" name="signup-sub" class="btn btn-success" value="SIGNUP" />
				</div>
				<p>
				</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<div class="row" style="height: 20px;"></div>
</div>  
<?php
include('footermy.html');
?>
</body>
</html>