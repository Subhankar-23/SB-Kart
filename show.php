<html><body>
<?php
        if(isset($_POST['show']))
        {
            $pid=$_POST['pid'];
            $con= mysqli_connect("localhost","root","");
            $db=mysqli_select_db($con,"shopping");
	        if(!$db)
            {
		        die('Something Went Wrong, Contact Support');
	        }
            $qry="select * from laptop_specification where p_id='$pid'";
            $result=mysqli_query($con,$qry);
            //if($result){
                if(mysqli_num_rows($result)>0)     //mysqli_num_rows($result)
                {
                echo "<table border='1'>";
                $row= mysqli_fetch_array($result);
                    echo "<tr>";
                    echo "<th>Product ID</th>";
                    echo "<td>$row[0]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Processor Name</th>";
                    echo "<td>$row[1]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Processor Brand</th>";
                    echo "<td>$row[2]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Processor Gen</th>";
                    echo "<td>$row[3]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>SSD</th>";
                    echo "<td>$row[4]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>RAM</th>";
                    echo "<td>$row[5]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>HDD</th>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Graphics Processor</th>";
                    echo "<td>$row[7]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>OS Arch</th>";
                    echo "<td>$row[8]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>OS</th>";
                    echo "<td>$row[9]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Weight</th>";
                    echo "<td>$row[10]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Touch</th>";
                    echo "<td>$row[11]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Screen Size</th>";
                    echo "<td>$row[12]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Warranty</th>";
                    echo "<td>$row[13]</td>";
                    echo "</tr>";
                echo "</table>";
                }
                else 
                {
                 echo "No Recored Found!!!!";   
                }
            
        }
?>
</body></html>