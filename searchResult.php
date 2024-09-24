<?php 
  include("header.php");
?>
<div id="content">
 <?php 

   if(isset($_REQUEST["cid"]))
   {
      $prid=$_REQUEST["cid"];
   }
   else 
   {
      $prid=0;
   }
   $search=$_REQUEST["txtSearch"];
   include("dbconnect.php");
   $rsCat=mysqli_query($con,"select * from category_info where cat_name like '%$search%'");
   echo("<div id='categoryArea'>");
   while($row=mysqli_fetch_array($rsCat))
   {
      echo("<div class='category'>");
      $id=$row["cat_id"];
      echo("<a href='index.php?cid=$id'>");
      echo($row["cat_dname"]);
      echo("<br><br>");
      $img=$row["cat_image_path"];
      echo("<img src='.\\collection\\$img' width='100' height='100' border='5'>");
      echo("</a>");
      echo("</div>");
   }
   echo("</div>");

  ?>
<?php 

   if(isset($_REQUEST["cid"]))
   {
      $prid=$_REQUEST["cid"];
   }
   else 
   {
      $prid=0;
   }

   include("dbconnect.php");
   $rsCat=mysqli_query($con,"select * from item_info where item_name like '%$search%'");
   echo("<div id='itemArea'>");
   while($row=mysqli_fetch_array($rsCat))
   {
      echo("<div class='item'>");
      $id=$row["item_id"];
      echo($row["item_name"]);
      echo("<br><br>");
      $img=$row["image_path"];
      echo("<img src='.\\collection\\$img' width='100' height='100' border='5'>");
      echo("<br><br>");
      echo("Detail :".$row["item_detail"]);
      echo("<br>");
      echo("Rate : <s>".$row["item_rate"]."</s>");
      echo("<br>");

      $dis=$row["item_discount"];

      $spdis=0;
      $rsOffer=mysqli_query($con,"select * from offer_info where now() >=
      offer_start_dt and now() <= offer_end_dt");
           while($rowOffer=mysqli_fetch_array($rsOffer))
           {
                $cats=$rowOffer["cat_type"];
                $catarr=explode("-",$cats);      //arr.php DEKHO JAAKE
                if(in_array($prid,$catarr))
                {
                   $spdis = $spdis + $rowOffer["offer_discount"];
                }
           }
           
      $dis = $dis + $spdis;

      $final=$row["item_rate"] - $row["item_rate"] * $dis/100;

      echo("Dis. Rate :".$final);
      echo("<div class='buyButton'>");
         echo("<a href='checkAlreadyLoginForBuy.php?prodid=$id&price=$final'>Buy</a>");
      echo("</div>");
      echo("</div>");
   }
   echo("</div>");

  ?>
  


</div><!--end of content-->

<?php 
  include("footer.php");
?>
