<?php 
  include("header.php");
?>
<div id="content">
<table border='1' width="80%" align="center">
<tr>
<th width="100">Sl. No.</th>
<th>News Heading</th>
</tr>
<?php
include("dbconnect.php");
$rsNews=mysqli_query($con,"select news_id,news_heading 
from news_info where del_status=0 order by reg_date desc");
    $cnt=0;
    while($row=mysqli_fetch_array($rsNews))
    {
        $cnt++;
        $id=$row["news_id"];
        $hd=$row["news_heading"];
        echo("<tr>");
        echo("<td>");
        echo($cnt);
        echo("</td>");
        echo("<td>");
echo("<a href='displayNewsDetail.php?nid=$id'>");
        echo($hd);
echo("</a>");
        echo("</td>");
        echo("</tr>");
    }
?>
</table>
</div><!--end of content-->

<?php 
  include("footer.php");
?>
