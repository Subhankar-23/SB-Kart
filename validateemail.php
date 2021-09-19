<?php
$email=$_GET['eid'];
$link= mysqli_connect("localhost","root","");
$data=mysqli_select_db($link,"shopping");
if(!$data)
{
    die('Something Went Wrong, Contact Support');
}
$que="select * from user_master where email='$email'";
$result=mysqli_query($link,$que);
if(mysqli_num_rows($result)>0){
    echo "<font color='red'>Email Already Exists</font>";
}
else{
    echo "<font color='green'>Available</font>";
}
mysqli_close($link);
?>