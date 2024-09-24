<?php session_start();
$a=$_REQUEST["txtUser"];
$b=$_REQUEST["txtPass"];

include("dbconnect.php");
$rsCust=mysqli_query($con,"select * from customer_info where user_name='$a'");

if(mysqli_num_rows($rsCust)==0)
{
    header("location:newLoginForm.php?resmsg=1");
}
else 
{
    $row=mysqli_fetch_array($rsCust);
    if($row["user_pass"]==$b)
    {
        $_SESSION["uname"]=$a;
        $_SESSION["utype"]="user";
        header("location:chooseProductQuantityForBuy.php");
    }
    else 
    {
        header("location:newLoginForm.php?resmsg=2");
    }
}

?>