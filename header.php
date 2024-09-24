<?php @session_start(); ?>
<html> 
<head>
<title> CCET-CART </title>
<link href="./style/mystyle.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="main">
        <div id="header">
           <div id="leftLogo">
            <a href='index.php'>
            <img src="./images/logoleft.png">
</a>
           </div><!--end of leftLogo-->
           <div id="title">
             <h1><a href='index.php' style='color:azure'>CCET-CART</a></h1>
             <h3> A hub of quality products!!!!!!  </h3>
            <div id="searchBar">
<form method="get" action="searchResult.php">
<span id="spn">Enter Search criteria</span><input type="text" name="txtSearch">
                               <input type="submit" value="ok">

</form>
</div>
             <?php
                if(isset($_SESSION["uname"]))
                 {
	                echo("<div id='welcomeUser'>");
                    $usr=$_SESSION["uname"];
                    echo("Welcome ". $_SESSION["uname"]."  ,  ");
                    echo("<a href='logout.php'>Logout</a>");
                  if($_SESSION["utype"]=="user")
	              {
		            echo("&nbsp;&nbsp;<a href='displayCartForOrder.php'> <img src='images/logocart.png' width='20' align='top' height='20'>");
                    include("dbconnect.php");
                    $rsCart=mysqli_query($con,"select count(*) from cart_info where user_name='$usr'");
                    $row=mysqli_fetch_array($rsCart);
                    $cnt=$row[0];
                    echo("($cnt)");
                    echo("</a>");
	              }
                    echo("</div>");
                 } 

              ?>
           
           </div><!--end of title-->
           <div id="rightLogo">
           <img src="./images/logoright.png">
           </div><!--end of rightLogo-->
               

        </div><!--end of header-->
