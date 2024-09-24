<?php @session_start();
 if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin")
  {
     $cats="";
     function getChildCategory($prnt)
     {
         $GLOBALS["cats"]=$GLOBALS["cats"].$prnt."-";
         include("dbconnect.php");
         $rsCat=mysqli_query($con,"select cat_id from 
         category_info where cat_parent_id='$prnt'");
         if(mysqli_num_rows($rsCat)==0)
         {
              return;  
         }
         else
         {
              while($row=mysqli_fetch_array($rsCat))
              {
                   getChildCategory($row["cat_id"]);
              }
         }
     }
$a=$_REQUEST["txtOfferName"];
$b=$_REQUEST["dtStart"];
$c=$_REQUEST["dtEnd"];
$d=$_REQUEST["cmbCategory"];
$e=$_REQUEST["txtDiscount"];
 
getChildCategory($d);
//echo($cats);
//echo(strtotime($c));A timestamp is a sequence of characters or encoded information identifying when a certain event occurred, usually giving date and time of day, sometimes accurate to a small fraction of a second.

$tempdt=strtotime("1 day",strtotime($c));
$newdate=date('Y-m-d',$tempdt);
//echo("$newdate");

$str=substr($cats,0,strlen($cats)-1);// LAST WALA DASH HATANE WASTE 1-2-3-4- <-- ye walla

include("dbconnect.php");
mysqli_query($con,"insert into 
offer_info(offer_name,offer_start_dt,offer_end_dt,
cat_type,offer_discount,reg_date) 
values('$a','$b','$newdate','$str','$e',now())") or die("Query Error");

header("location:offerForm.php?resmsg=1");
}
else
{
    header("location:loginForm.php");
}
?>