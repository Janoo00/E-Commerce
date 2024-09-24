<?php @session_start();
  include("header.php");
?>
<div id="content">
<?php 
    $a=$_REQUEST["txtQuantity"];
    $b=$_SESSION["prodid"];
    $c=$_SESSION["price"];
    $d=$_SESSION["uname"];
        
    include("dbconnect.php");
    mysqli_query($con,"insert into cart_info
(item_id,item_quantity,item_rate,user_name,reg_date) 
values('$b','$a','$c','$d',now())") or die("Query error");
    echo("<h3>Item has been added into your cart</h3>"); 
    echo("<h3>Do you want to add more item into your cart ?</h3>");
    echo("<h3><a href='index.php'>Yes</a>");
    echo(" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayCartForOrder.php'>No</a></h3>")
?>

</div><!--end of content-->

<?php 
  include("footer.php");
?>
