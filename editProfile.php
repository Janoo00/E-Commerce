<?php @session_start();
 if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user")
  {
  include("header.php");
?>
<div id="content">

<div id="adminArea">
<div id="leftAdminArea">
<?php
  include("userMenu.php");
?>

</div><!--end leftAdminArea-->
<div id="rightAdminArea">
<div>&nbsp;</div>
<?php 
include("dbconnect.php");
$usr=$_SESSION["uname"];
$rsUser=mysqli_query($con,"select * from customer_info where user_name='$usr'");
$row=mysqli_fetch_array($rsUser);
$a=$row["cust_name"];
$b=$row["cust_email"];
$c=$row["cust_mobile"];
$d=$row["cust_address"];
$e=$row["user_pass"];
?>
<div id="myForm">
  <?php 
  if(isset($_REQUEST["resmsg"]))
  {
    echo("<div id='resmsg'>");
    if($_REQUEST["resmsg"]==1)
    {
      echo("Data has been updated");
    }
    elseif($_REQUEST["resmsg"]==2)
    {
      echo("User name already exist...");
    }

    echo("</div>");
  }

?>
  <form method="get" action="updateProfile.php">

<label>Enter Your Name </label>
<input type="text" name="txtName" value='<?=$a?>'>
<label>Enter Your Email Id </label>
<input type="text" name="txtEmail" value='<?=$b?>'>
<label>Enter Your Contact No </label>
<input type="text" name="txtContact" value='<?=$c?>'>
<label>Enter Your Address </label>
<textarea name="txtAddress" value='<?=$d?>' style="height: 140px;"> </textarea>
<label>Enter User Name </label>
<input type="text" name="txtUser" readonly='readonly' value='<?=$usr?>'>
<label>Enter Your Password </label>
<input type="password" name="txtPass" value='<?=$e?>'>

<div id="buttonGroup"> 
<input type="submit" value="Ok">
<input type="reset" value="Cancel">

</div>



  </form>
</div><!---end of myForm-->
<div>&nbsp;</div>
</div><!--end rightAdminArea-->

</div><!--end adminArea-->

</div><!--end of content-->

<?php 
  include("footer.php");
}
else
{ 
     header("location:loginForm.php");
}
?>
