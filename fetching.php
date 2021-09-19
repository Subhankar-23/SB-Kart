<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
        <table>
                
            <tr>
                    <td><label>Enter the Student ID</label></td>
                    <td><input type="text" name="n1" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="n2" value="SEE DATA"/></td>
            </tr>
            </form>
        </table>
    </form>

<?php
        if(isset($_GET['n2']))
        {
            $id=$_GET['n1'];
            $con= mysqli_connect("localhost","root","");
            mysqli_select_db($con, "shopping");
            $qry="select * from product_master where p_id=$id";
            $result= mysqli_query($con, $qry);
            if($result = mysqli_query($con, $qry)){	
            if(mysqli_num_rows($result)>0)
            {
                echo "<table width='100%' border='1'>";
                while($row= mysqli_fetch_array($result))
		        {
                    echo "<tr>";
                    echo "<th>Student ID</th>";
                    echo "<td>$row[0]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Student Name</th>";
                    echo "<td>$row[1]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Email ID</th>";
                    echo "<td>$row[2]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Password</th>";
                    echo "<td>$row[3]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Phone Number</th>";
                    echo "<td>$row[4]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    
                }
                echo "</table>";
            }
            else 
            {
                 echo "No Recored Found!!!!<span>&#8377;</span>";   
            }
            
        }
?>
    </body>
</html>
