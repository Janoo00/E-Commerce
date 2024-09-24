<?php 
  include("header.php");
?>
<div id="content">
<table border='1' width="80%" align="center">
<tr>
<th>News Detail</th>
</tr>
<?php
$x=$_REQUEST["nid"];
include("dbconnect.php");
$rsNews=mysqli_query($con,"select news_detail 
from news_info where news_id=$x");
    while($row=mysqli_fetch_array($rsNews))
    {
        $hd=$row["news_detail"];
        echo("<tr>");
        echo("<td>");
        echo($hd);
        echo("</td>");
        echo("</tr>");
    }
?>
</table>
</div><!--end of content-->

<?php 
  include("footer.php");
?>
