<?php 
  include("header.php");
?>
<div id="content">

<table border='1' align='center'>
<tr><th>Sl. No.</th><th>Product Name</th><th>Image</th><th>Quantity</th>
<th>Rate</th><th>Amount</th><th>Status</th></tr>
<?php
    include("dbconnect.php");
    $usr=$_SESSION['uname'];
    $rsCart=mysqli_query($con,"select * from cart_info,item_info where item_info.item_id=cart_info.item_id
    and user_name='$usr'");
    $cnt=0;
    $totalAmnt=0;
    while($row=mysqli_fetch_array($rsCart))
    {
       $cnt++;
       echo("<tr>");
       echo("<td>");
       echo($cnt);
       echo("</td>");
       echo("<td>");
       echo($row["item_name"]);
       echo("</td>");
       echo("<td>");
       $img=$row["image_path"];
       echo("<img src='.\\collection\\$img' width='55' height='50' border='1'>");
       echo("</td>");
       echo("<td>");
       echo($row["item_quantity"]);
       echo("</td>");
       echo("<td>");
       echo($row["item_rate"]);
       echo("</td>");
       echo("<td>");

       $amnt=$row["item_rate"]*$row["item_quantity"];
       echo($amnt);
       $totalAmnt=$totalAmnt + $amnt;

       echo("</td>");
       echo("<td>");
       $id=$row["cart_id"];
       echo("<a href='deleteItemFromCart.php?pid=$id'>Delete</a>");
       echo("</td>");
       echo("</tr>");
    }
echo("<tr><td colspan='5' align='center'><b>Total Amount :</b></td><td colspan='2'><b>$totalAmnt</b></td></tr>");
?>
</table>
<?php
    include("dbconnect.php");
    $usr=$_SESSION['uname'];
    $rsCart=mysqli_query($con,"select * from cart_info where user_name='$usr'");
    $row=mysqli_num_rows($rsCart);
if($row!=0)
{
echo("<div id='placeOrder'>");
echo("<a href='insertOrder.php?amnt=$totalAmnt'>");
echo("Place Order");
echo("</a>");
echo("</div>");
}
else
{
echo("<div id='placeOrder'>");
echo("<a href='index.php'>");
echo("Add Item");
echo("</a>");
echo("</div>");
}
?>

</div><!--end of content-->

<?php 
  include("footer.php");
?>
