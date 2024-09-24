<?php session_start();
    $a=$_REQUEST["txtQuantity"];
    $b=$_SESSION["prodid"];
    $c=$_SESSION["price"];
    $d=$_SESSION["uname"];
        
    include("dbconnect.php");
    mysqli_query($con,"insert into cart_info
(item_id,item_quantity,item_rate,user_name,reg_date) 
values('$b','$a','$c','$d',now())") or die("Query error");
    echo("Item has been added into your cart");
?>