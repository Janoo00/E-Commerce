<?php 
$a=$_REQUEST["txtItemName"];
$b=$_REQUEST["txtDetail"];
$c=$_FILES["flImage"];
$d=$_REQUEST["cmbParent"];
$e=$_REQUEST["txtRate"];
$f=$_REQUEST["txtDiscount"];

if($d=="Primary")
{
    $d=0;
}
else 
{
  $d=$_REQUEST["cmbParent"];
}

//echo($c["type"]);
//echo($c["size"]);
//echo($c["tmp_name"]);

$img=$c["name"];
move_uploaded_file($c["tmp_name"],".\\collection\\$img");


include("dbconnect.php");

mysqli_query($con,"insert into 
item_info(item_name,item_detail,image_path,parent_category,item_rate,item_discount,reg_date) 
values('$a','$b','$img','$d','$e','$f',now())");

header("location:itemForm.php?resmsg=1");


?>