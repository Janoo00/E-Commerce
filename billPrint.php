<html>
<head>
    <script>
      function billPrint()
      {
            window.print();

      }
    </script>
</head>
<body>
    <?php @session_start();
$usr=$_SESSION["uname"];
require_once("library.php");
displayTable("select * from order_master where user_name='$usr'");
?>

<div id="placeOrder">
<input type="button" value="Print Bill" onclick="billPrint();">
</div>
</body>
</html>