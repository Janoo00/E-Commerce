<table border='1' width="80%" align="center">
<tr>
<th width="100">Sl. No.</th>
<th>Message Heading</th>
<th>Received Date</th>
<th>Sender Name</th>
</tr>
<?php
include("dbconnect.php");
$usr=$_SESSION["uname"];
$rsNews=mysqli_query($con,"select *
from message_info where receiver_name='$usr' order by sent_date desc");
    $cnt=0;
    while($row=mysqli_fetch_array($rsNews))
    {
        $cnt++;
        $id=$row["msg_id"];
        $hd=$row["msg_heading"];
        $sn=$row["sender_name"];
        $dt=$row["sent_date"];
        echo("<tr>");
        echo("<td>");
        echo($cnt);
        echo("</td>");
        if($_SESSION["utype"]=="admin")
        {
           echo("<td>");
           echo("<a href='displayAdminMsgDetail.php?nid=$id'>");
           echo($hd);
           echo("</a>");
        }
        else
        {
           echo("<td>");
           echo("<a href='displayUserMsgDetail.php?nid=$id'>");
           echo($hd);
           echo("</a>");
        }
        

        echo("</td>");
        echo("<td>");
        echo($dt);
        echo("</td>");
        echo("<td>");
        echo($sn);
        echo("</td>");
        echo("</tr>");
    }
?>
</table>