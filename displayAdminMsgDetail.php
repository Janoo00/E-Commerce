<?php 
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
<div style="width:80%; margin:10px; padding:20px; border: 2px solid black;">
<?php
$x=$_REQUEST["nid"];
include("dbconnect.php");
$rsNews=mysqli_query($con,"select *
from message_info where msg_id=$x order by sent_date desc");
    $row=mysqli_fetch_array($rsNews);
    {
        $id=$row["msg_id"];
        $hd=$row["msg_heading"];
        $sn=$row["sender_name"];
        $dt=$row["sent_date"];
        $md=$row["msg_detail"];
        echo("<b>Heading : </b>".$hd);
        echo("<hr>");
        echo("<b>Rec. Date : </b>".$dt);
        echo("<hr>");
        echo("<b>Sender Name : </b>".$sn);
        echo("<hr>");
        echo("<b>Detail : </b>".$md);
        echo("<hr>");
    }
?>
</div>
<div id="replyBtn">
    <a href="replyFormByAdmin.php?usr=<?=$sn?>">Reply</a>
</div>
</div><!--end rightAdminArea-->

</div><!--end adminArea-->

</div><!--end of content-->

<?php 
  include("footer.php");
?>
