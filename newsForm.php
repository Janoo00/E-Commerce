<?php 
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
<div>&nbsp;</div>
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
  <form method="post" action="insertNews.php">

<label>Enter News Heading </label>
<input type="text" name="txtHeading">
<label>Enter News Detail </label>
<textarea  name="txtDetail" row="10"></textarea>

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
?>
