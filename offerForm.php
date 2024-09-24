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
      echo("Offer has been saved");
    }
    elseif($_REQUEST["resmsg"]==2)
    {
      echo("Offer already exist...");
    }

    echo("</div>");
  }

?>
  <form method="post" action="insertOffer.php">

<label>Enter Offer Name </label>
<input type="text" name="txtOfferName">
<label>Choose Offer Start Date</label>
<input type="date" name="dtStart">
<label>Choose Offer End Date</label>
<input type="date" name="dtEnd">

<label>Choose Category</label>
<select name="cmbCategory">
 <option value="0">Choose Category Name</option>
 <?php 
    include("dbconnect.php");
    $rsCat=mysqli_query($con,"select cat_id, cat_name from category_info order by cat_name");
    while($row=mysqli_fetch_array($rsCat))
    {
      $id=$row["cat_id"];
       echo("<option value='$id'>");
        echo($row["cat_name"]);
       echo("</option>");
    }

?>

</select>


<label>Enter Offer Discount In %</label>
<input type="text" name="txtDiscount">

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
