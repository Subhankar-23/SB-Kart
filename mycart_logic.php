<?php
    $id=$_GET['pid'];
    //echo $id;
    $page=$_GET['page'];
    if(isset($_COOKIE['mycart']))
    {
        $data=$_COOKIE['mycart'];
        echo $data;
        
        setcookie("mycart",$data,time()+60);                                           
    }
    else
    {
        setcookie("mycart",$id,time()+60);
    }
    header("location:$page.php?pid=$id");
    //echo $_COOKIE['mycart'];
?>