<?php
	session_start();
	$name= $_POST["name"];
	$email= $_POST["email"];
	$con=$_POST["con"];
	$rcon=$_POST["rcon"];
	$addr=$_POST["add"];
	$lmark=$_POST["lmark"];
	$pin=$_POST["pin"];
	$pid=$_GET['pid'];
	if(isset($_POST["order"]))
	{
		$link= mysqli_connect("localhost","root","","shopping");
		if(!$link)
		{
    		die('Something Went Wrong, Contact Support');
		}
		$name = mysqli_real_escape_string($link, $_REQUEST['name']);
		$email = mysqli_real_escape_string($link, $_REQUEST['email']);
		$con = mysqli_real_escape_string($link, $_REQUEST['con']);
		$rcon = mysqli_real_escape_string($link, $_REQUEST['rcon']);
		$addr = mysqli_real_escape_string($link, $_REQUEST['addr']);
		$lmark = mysqli_real_escape_string($link, $_REQUEST['lmark']);
		$pin = mysqli_real_escape_string($link, $_REQUEST['pin']);
		$pid = mysqli_real_escape_string($link, $_REQUEST['pid']);
		$sql = "INSERT INTO order_master (name, email, con, rcon, addr, lmark, pin, pid) VALUES ('$name', '$email', '$con', '$rcon', '$addr', '$lmark', '$pin', '$pid')";
		if(mysqli_query($link, $sql)){
    		$msg="Order Placed successfully!";
		} else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
?>

<html>
<head>
	<title>My Order | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap'); 
	.col-sm-4{
		font-weight: bold;
		font-family: Arial;
		font-size: 17px; 
	}
	</style>
	<script>
		function ValidateForm()
		{
			temp=true;
			v1=document.getElementById("s1").value;
			v2=document.getElementById("s2").value;
			v3=document.getElementById("s3").value;
			v4=document.getElementById("s4").value;
			v5=document.getElementById("s5").value;
			v6=document.getElementById("s6").value;
			v7=document.getElementById("s7").value;
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
				document.getElementById("d3").innerHTML="Enter Contact Number";
			}
			else{
				document.getElementById("s3").style="";
			}

			if(v4==""){
				temp=false;
				document.getElementById("s4").style="border-color: red";
				document.getElementById("d4").innerHTML="Enter Recovery Number";
			}
			else{
				document.getElementById("s4").style="";
			}

			if(v5==""){
				temp=false;
				document.getElementById("s5").style="border-color: red";
				document.getElementById("d5").innerHTML="Enter Full Address";
			}
			else{
				document.getElementById("s5").style="";
			}

			if(v6==""){
				temp=false;
				document.getElementById("s6").style="border-color: red";
				document.getElementById("d6").innerHTML="Enter Land Mark";
			}
			else{
				document.getElementById("s6").style="";
			}

			if(v7==""){
				temp=false;
				document.getElementById("s7").style="border-color: red";
				document.getElementById("d7").innerHTML="Enter Pincode";
			}
			else{
				document.getElementById("s7").style="";
			}

			return temp;
		}
	</script>
</head>
<body>                             
<?php
include('header.html');                                                  
?> 
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
		echo "<div class='col-sm-4' style='text-align: center;'>
		<div class='row'>
		<div class='col-sm-12'><img src='$row[4]' width='90px' height='150px' title='$row[1]' /></div>
		</div>
		<div class='row'>
		<div class='col-sm-12'><div style='font-weight: bold; color: #1ca2e6; font-size: 26px; text-align: center;'>$row[1] </div>  
		<p><div class='price' style='color:blue;font-size:20px;'>Price: <span>&#8377;</span>$row[2]</div></div>
		</div>
		</div>";
		echo "<div class='col-sm-1'>";
		echo"</div>";
		echo "<div class='col-sm-5'>
		<font style='color: red; font-size: 20px; align: center;'>$msg</font>
		<div class='row' style='background-color: #dbf4ff; border-radius:10px;  border-style: solid; border-color: #4f92ff; border-width:1px;'>
		<div class='col-sm-12'>
		<h3 style='text-align: center; font-weight: bold; padding-top: 0px;'><i> Order Form </i></h3><p><hr>
		
			<form class='form-horizontal' method='post' onsubmit='return ValidateForm()'>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px'>
					<label>Full Name<font style='color: red;'>*</font></label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
					<input type='text' id='s1' name='name' class='form-control' placeholder='Full Name'  />
					<div id='d1' style='color: red;'></div>
				</div>
				</div>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px'>
					<label>Email Id<font style='color: red;'>*</font></label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
					<input type='email' id='s2' name='email' class='form-control' placeholder='Email ID' />
					<div id='d2' style='color: red;'></div><div id='c1' style='color: red;'></div>
				</div>
				</div>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px'>
					<label>Contact Number<font style='color: red;'>*</font></label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
					<input type='tel' id='s3' name='con' class='form-control' placeholder='Contact Number'  />
					<div id='d3' style='color: red;'></div>
				</div>
				</div>
                <div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px;'>
					<label>Recovery Number</label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
					<input type='tel' id='s4' name='rcon' class='form-control' placeholder='Recovery contact number'  />
					<div id='d4' style='color: red;'></div>
					
				</div>
				</div>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px;'>
					<label>Address<font style='color: red;'>*</font></label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
				<textarea id='s5' name='addr' class='form-control' placeholder='Full Address' style='width:100%; height: 50px;' ></textarea>
					<div id='d5' style='color: red;'></div>
					
				</div>
				</div>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px'>
					<label>LandMark<font style='color: red;'>*</font></label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
					<input type='text' id='s6' name='lmark' class='form-control' placeholder='Land Mark' />
					<div id='d6' style='color: red;'></div>
				</div>
				</div>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px'>
					<label>Pincode<font style='color: red;'>*</font></label>
				</div>
				<div class='col-sm-8' style='text-align: left;'>
					<input type='text' id='s7' name='pin' class='form-control' placeholder='Pincode' />
					<div id='d7' style='color: red;'></div>
				</div>
				</div>
				<div class='form-group'>
				<div class='col-sm-4' style='text-align: ; font-size: 16px'>
					<label></label>
				</div>
				<div class='col-sm-8' style='text-align: center;'>
                <input type='submit' name='order' class='form-control btn-success' style='font-weight: bold;' value='Order(COD)' />
                <a href='pay.php' style='color: Blue; text-decoration: none; font-weight: bold;'>Pay Online</a>
					<div id='d1' style='color: red;'></div>
				</div>
				</div>
			</form>	
		</div> 
		</div>
		</div>";
		echo "<div class='col-sm-1'></div>";
		echo "</div>";
		echo "<div class='row' style='height:15px'></div>";
	}
?>
</div>
<?php
include('footermy.html');                                                  
?> 
</body>
</html>