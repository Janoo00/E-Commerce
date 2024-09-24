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
<div>&nbsp;</div>
<div id="myForm">
  <?php 
  if(isset($_REQUEST["resmsg"]))
  {
    echo("<div id='resmsg'>");
    if($_REQUEST["resmsg"]==1)
    {
      echo("Data has been saved");
    }
    elseif($_REQUEST["resmsg"]==2)
    {
      echo("User name already exist...");
    }

    echo("</div>");
  }

?>
  <form method="post" enctype="multipart/form-data" action="insertCategory.php">

<label>Enter Category Name </label>
<input type="text" name="txtName">
<label>Enter Category Display Name </label>
<input type="text" name="txtDname">
<label>Choose Category Image </label>
<input type="file" name="flImage">
<label>Choose Category Type </label>
<select name="cmbType">
 <option>Primary</option>
 <option>Secondary</option>
</select>

<label>Choose Parent Category</label>
<select name="cmbParent">
 <option>Choose any parent name</option>
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
