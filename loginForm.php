<?php @session_start();
  include("header.php");
?>
<div id="content">

<div>&nbsp;</div>
<div id="myForm">
<?php 
  if(isset($_REQUEST["resmsg"]))
  {
    echo("<div id='resmsg'>");
    if($_REQUEST["resmsg"]==1)
    {
      echo("Wrong User Name!!!!!!!");
    }
    elseif($_REQUEST["resmsg"]==2)
    {
      echo("Wrong Password!!!!!!!");
    }

    echo("</div>");
  }

?>
  <form method="get" action="checkLogin.php">

<label>Enter User Name </label>
<input type="text" name="txtUser">
<label>Enter Your Password </label>
<input type="password" name="txtPass">

<div id="buttonGroup"> 
<input type="submit" value="Ok">
<input type="reset" value="Cancel">

</div>



  </form>
</div><!---end of myForm-->
<div>&nbsp;</div>

</div><!--end of content-->

<?php 
  include("footer.php");
?>
