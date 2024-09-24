<html>
<head>
<script>
var w;
function billPrint()
{
    w=window.open("billPrint.php","p1");
}
</script>
</head>
</body>
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
<?php
$usr=$_SESSION["uname"];
require_once("library.php");
displayTable("select * from order_master where user_name='$usr'");
?>

<div id="placeOrder">
<input type="button" value="Print Bill" onclick="billPrint();">
</div>
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
</body>
</html>
