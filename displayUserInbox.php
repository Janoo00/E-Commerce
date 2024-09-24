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
include("getInbox.php");
?>
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
