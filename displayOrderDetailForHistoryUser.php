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

<?php 
$id=$_REQUEST["id"]; 
?>
<div id="rightAdminArea">

<?php
include("dbconnect.php");

$rsOrder=mysqli_query($con,"select * from order_detail,item_info 
where order_detail.item_id=item_info.item_id 
and order_ref_id='$id'");
echo("<div id='mylist'>");
       echo("<table border='1'");
       echo("<tr>");
       echo("<th>Sl.No.</th>");
       echo("<th>Item Name</th>");
       echo("<th>Quantity</th>");
       echo("<th>Rate</th>");
       echo("</tr>");
       $cnt=0;
       while($row=mysqli_fetch_array($rsOrder))
       {
           $cnt++;
           $id=$row["order_detail_id"];
           echo("<tr>");
             echo("<td>");
               echo($cnt);
             echo("</td>");
             echo("<td>");
               echo($row["item_name"]);
             echo("</td>");
             echo("<td>");
               echo($row["item_quantity"]);
             echo("</td>");
             echo("<td>");
               echo($row["item_rate"]);
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
