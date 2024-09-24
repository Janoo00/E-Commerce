<?php
include("dbconnect.php");
function displayTable($sql)
{
$con=$GLOBALS["con"];
$rs=mysqli_query($con,$sql);
$rc=mysqli_num_rows($rs);
$cc=mysqli_num_fields($rs);
echo("<div id='myList'>");
echo("<table border='1'>");
echo("<tr>");
      echo("<th>Sl. No.</th>");
      
      for($i=0;$i<=$cc-1;$i++)
       {
          echo("<th>");
          echo(mysqli_fetch_field_direct($rs,$i)->name);
          echo("</th>");
       }
      echo("</tr>");
      $cnt=0;
      for($i=0;$i<=$rc-1;$i++)
      {
         $cnt++;
         mysqli_data_seek($rs,$i);
         $row=mysqli_fetch_array($rs);
         $id=$row[0];
         echo("<tr>");
         echo("<td>$cnt</td>");
         for($j=0;$j<=$cc-1;$j++)
         { 
             echo("<td>");
             echo($row[$j]);
             echo("</td>"); 
         }
         echo("</tr>");
       
      }
       echo("</table>");
echo("</div>");
       
}
//displayTable("select * from item_info"); //JO SHOW KARNA HAI KARLE 
?>