<?php
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtEmail"];
$c=$_REQUEST["txtContact"];
$d=$_REQUEST["txtAddress"];
$e=$_REQUEST["txtUser"];
$f=$_REQUEST["txtPass"];

include("dbconnect.php");
mysqli_query($con,"update customer_info set 
cust_name='$a',cust_email='$b',cust_mobile='$c',cust_address='$d',user_pass='$f' where user_name='$e'");
header("location:editProfile.php?resmsg=1");

?>