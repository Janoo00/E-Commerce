<?php 
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtDname"];




$d=$_REQUEST["cmbType"];

if($d=="Primary")
{
    $e=0;
}
else 
{
  $e=$_REQUEST["cmbParent"];
}


$c=$_FILES["flImage"];

//echo($c["type"]);
//echo($c["size"]);
//echo($c["tmp_name"]);

$img=$c["name"];


move_uploaded_file($c["tmp_name"],".\\collection\\$img");


include("dbconnect.php");

mysqli_query($con,"insert into category_info(cat_name,cat_dname,cat_image_path,cat_type,cat_parent_id,reg_date) values('$a','$b','$img','$d','$e',now())");

header("location:categoryForm.php?resmsg=1");


?>