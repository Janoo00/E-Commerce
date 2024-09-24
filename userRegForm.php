<html>
  <head>
    <script>
      function validityCheck()
{
    if(document.f1.txtName.value=="")
    {
        alert("Name can not be empty");
        document.f1.txtName.focus();
    }
    else if(document.f1.txtEmail.value=="")
    {
        alert("Email id can not be empty");
        document.f1.txtEmail.focus();
    }
    else if(document.f1.txtEmail.value.indexOf("@")<0 || 
    (document.f1.txtEmail.value.indexOf("@")!=document.f1.txtEmail.value.lastIndexOf("@")))
    {
        alert("Invalid email id");
        document.f1.txtEmail.focus();
    }
    else if(document.f1.txtContact.value=="")
    {
        alert("Mobile No. can not be empty");
        document.f1.txtMobile.focus();
    }
    else if(document.f1.txtAddress.value=="")
    {
        alert("Mobile No. can not be empty");
        document.f1.txtMobile.focus();
    }
    else if(isNaN(document.f1.txtContact.value)==true)
    {
        alert("Mobile No. can have only numeric values");
        document.f1.txtMobile.focus();
    }
    else if(document.f1.txtUser.value=="")
    {
        alert("User name can not be empty");
        document.f1.txtUser.focus();
    }
    else if(document.f1.txtPass.value=="")
    {
        alert("Password can not be empty");
        document.f1.txtPassword.focus();
    }
    else if(document.f1.txtPass.value.length<6)
    {
        alert("Password should have atleast 6 characters");
        document.f1.txtPassword.focus();
    }
    else
    {
        document.f1.submit();
    }
}
    </script>
  </head>
  <body>
<?php 
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
      echo("Data has been saved");
    }
    elseif($_REQUEST["resmsg"]==2)
    {
      echo("User name already exist...");
    }

    echo("</div>");
  }

?>
  <form method="get" action="insertCustomer.php" name="f1">

<label>Enter Your Name </label>
<input type="text" name="txtName">
<label>Enter Your Email Id </label>
<input type="text" name="txtEmail">
<label>Enter Your Contact No </label>
<input type="text" name="txtContact">
<label>Enter Your Address </label>
<textarea name="txtAddress" style="height: 140px;"> </textarea>
<label>Enter User Name </label>
<input type="text" name="txtUser">
<label>Enter Your Password </label>
<input type="password" name="txtPass">

<div id="buttonGroup"> 
<input type="button" value="Ok" onClick="validityCheck();" name="btn1"/>
<input type="reset" value="Cancel" onClick="show2();" name="btn2" />

</div>



  </form>
</div><!---end of myForm-->
<div>&nbsp;</div>

</div><!--end of content-->

<?php 
  include("footer.php");
?>
  </body>
</html>
