<?php 
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
<div id="myForm">
  <?php 
  if(isset($_REQUEST["resmsg"]))
  {
    echo("<div id='resmsg'>");
    if($_REQUEST["resmsg"]==1)
    {
      echo("News has been saved");
    }
    elseif($_REQUEST["resmsg"]==2)
    {
      echo("News already exist...");
    }

    echo("</div>");
  }

?>
  <form method="post" action="insertComplain.php">
<?php
$rec="admin";
?>
<label>Complain To</label>
<input type="text" name="txtReceiver" readonly="readonly" value='<?php echo($rec); ?>'>
<label>Complain Heading</label>
<input type="text" name="txtHeading">
<label>Complain Detail </label>
<textarea  name="txtDetail" row="10"></textarea>

<div id="buttonGroup"> 
<input type="submit" value="Ok">
<input type="reset" value="Cancel">

</div>



  </form>
</div><!---end of myForm-->
</div><!--end rightAdminArea-->

</div><!--end adminArea-->

</div><!--end of content-->

<?php 
  include("footer.php");
?>
