<html>
<body>
<?php
    $str="1-3-5-6-7-";
    
    $x=array(10,20,30,40,50);

    //we cant print echo($x);
    //but can print echo($x[0]);

    //implode array ko string me convert
    //explode string ko array me convert

    $y=implode("^_^",$x);
    //echo($y);
     
    $z=explode("-",$str);
    echo($str[0]);

    if(in_array(7,$z))//agar 7 ho z me to 
    {
       echo("Hello");
    }
    else
    {
       echo("Hi");
    }
?>
</body>
</html>