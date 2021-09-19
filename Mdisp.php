<?php                            
$con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shopping");
$i=1;
if(!$db)
{
    die('Something Went Wrong, Contact Support');  
}
$qry="select * from product_master where p_type='Mobile'";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result)>0)    
{
    $x=0;
    echo "<div class='row'>";
    echo "<div class='col-sm-3'></div>";
        $row= mysqli_fetch_array($result);
    
            
        echo "<div class='col-sm-2'>";
        echo "<div class='box'>";
        echo "<div class='row'><div class='col-sm-12'><a href='Mobile.php'><img src='$row[4]' width='90px' height='150px' /></a></div></div>";
        echo "<div class='row'><div class='col-sm-12'>$row[1]</div></div>";
        echo "<div class='row'><div class='col-sm-12' style='color:blue'>Price: <span>&#8377;</span>$row[2]</div></div><br>";
        echo "<img src='images/star.png'/><img src='images/star.png'/><img src='images/star.png'/><img src='images/star.png'/>";
        echo "</div>";
        echo "</div>";
        
        $row1= mysqli_fetch_array($result);
    
            
        echo "<div class='col-sm-2'>";
        echo "<div class='box'>";
        echo "<div class='row'><div class='col-sm-12'><a href='Mobile.php'><img src='$row1[4]' width='90px' height='150px' /></a></div></div>";
        echo "<div class='row'><div class='col-sm-12'>$row1[1]</div></div>";
        echo "<div class='row'><div class='col-sm-12' style='color:blue'>Price: <span>&#8377;</span>$row1[2]</div></div><br>";
        echo "<img src='images/star.png'/><img src='images/star.png'/><img src='images/star.png'/><img src='images/star.png'/>";
        echo "</div>";
        echo "</div>";    

        $row2= mysqli_fetch_array($result);
    
            
        echo "<div class='col-sm-2'>";
        echo "<div class='box'>";
        echo "<div class='row'><div class='col-sm-12'><a href='Mobile.php'><img src='$row2[4]' width='90px' height='150px' /></a></div></div>";
        echo "<div class='row'><div class='col-sm-12'>$row2[1]</div></div>";
        echo "<div class='row'><div class='col-sm-12' style='color:blue'>Price: <span>&#8377;</span>$row2[2]</div></div><br>";
        echo "<img src='images/star.png'/><img src='images/star.png'/><img src='images/star.png'/><img src='images/star.png'/>";
        echo "</div>";
        echo "</div>"; 
    echo "<div class='col-sm-3'></div>";       
    echo "</div>";                                               
    
    
}
?>