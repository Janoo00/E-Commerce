<?php @session_start();
  if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin")
  {
  include("header.php");
?>
<div id="content">

<div id="adminArea">
<div id="leftAdminArea">
<?php
  include("adminMenu.php");
?>

</div><!--end leftAdminArea-->
<div id="rightAdminArea">
<?php
require_once("library.php");
displayTable("select * from Offer_info");
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
