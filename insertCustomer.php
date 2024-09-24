<?php 
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtEmail"];
$c=$_REQUEST["txtContact"];
$d=$_REQUEST["txtAddress"];
$e=$_REQUEST["txtUser"];
$f=$_REQUEST["txtPass"];

include("dbconnect.php");

$rsCust=mysqli_query($con,"select * from customer_info where user_name='$e'");

if(mysqli_num_rows($rsCust)==0)
{

mysqli_query($con,"insert into customer_info(cust_name,cust_email,cust_mobile,cust_address,user_name,user_pass,user_type,reg_date) values('$a','$b','$c','$d','$e','$f','user',now())") or die("Query Error");

  header("location:userRegForm.php?resmsg=1");

}
else 
{
    header("location:userRegForm.php?resmsg=2");
}


?>