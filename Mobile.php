<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobiles | SB Kart</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	.box
    {
        
        margin: 5px;
        text-align: center;
        font-weight: bold;
        margin-left: 6px;
        margin-right: 6px;
        margin-top: 10px;
        font-size: 16px;
        font-family: Arial;
        box-shadow: 0 0 4px 0 #61a2d4;
        box-align: center;
        border-radius: 5px;
    }
	</style>
</head>
<body>
<?php
include('header.html');                            
?>
<!-- Test Code -->
<div class="container-fluid">
<?php
$con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shopping");
if(!$db)
{
    die('Something Went Wrong, Contact Support');
}
$qry="select * from product_master where p_type='Mobile'";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result)>0)    
{
    $x=0;
    while($row= mysqli_fetch_array($result))
    {
        if($x==0)
            echo "<div class='row'>";
        echo "<div class='col-sm-3'>";
        echo "<div class='box'>";
        echo "<div class='row'><div class='col-sm-12'><a href='Mobile_desp.php?pid=$row[0]'><img src='$row[4]' width='110px' height='200px' /></a></div></div>";
        echo "<div class='row'><div class='col-sm-12'>$row[1]</div></div>";
        echo "<div class='row'><div class='col-sm-12' style='color:blue'>Price: <span>&#8377;</span>$row[2]</div></div>";
        echo "<div class='row'><div class='col-sm-12'><a href='Mobile_desp.php?pid=$row[0]'><input type='submit' name='desp'  value='Buy Now' /></a></div></div>";
        echo "</div>";
        echo "</div>";
        $x++;
        if($x==4)
        {
            echo "</div>";
            $x=0;
        }
    }
}
?>.
</div>  
<?php
include('footermy.html');
?>
</body>
</html>