<html>
  <head>
    <title> Practica 1 </title>
  </head>
<body>



<?php
echo $_GET['favgame'];
echo "<br/>";
$myfavsong = urlencode("waka waka");
echo "<a href='4.php?favsong=$myfavsong'>";
echo "Clica aqui para saber tu cancion favorita"; 
echo "</a>";


?>
</body>
</html>