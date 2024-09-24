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
include("dbconnect.php");
$rsOrder=mysqli_query($con,"select * from order_master order by order_id desc");
echo("<div id='mylist'>");
       echo("<table border='1'");
       echo("<tr>");
       echo("<th>Sl.No.</th>");
       echo("<th>Customer Name</th>");
       echo("<th>Order Date</th>");
       echo("<th>Total Amount</th>");
       echo("<th>Current Status</th>");
       echo("<th>Status</th>");
       echo("</tr>");
       $cnt=0;
       while($row=mysqli_fetch_array($rsOrder))
       {
           $cnt++;
           $id=$row["order_id"];
           echo("<tr>");
             echo("<td>");
               echo($cnt);
             echo("</td>");
             echo("<td>");
               echo($row["user_name"]);
             echo("</td>");
             echo("<td>");
               echo($row["order_date"]);
             echo("</td>");
             echo("<td>");
               echo($row["total_amount"]);
             echo("</td>");
             echo("<td>");
               echo($row["order_status"]);
             echo("</td>");
             echo("<td>");
               echo("<a href='displayOrderDetailForAdmin.php?id=$id'>Detail</a>");
             echo("</td>");
           echo("</tr>");   
       }
echo("</table>");
echo("</div>"); 
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
