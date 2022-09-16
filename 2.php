<html>
  <head>
    <title> Practica 1 </title>
  </head>
<body>



<?php
echo $_POST['user'];
echo "<br/>";
echo $_POST['pass'];
echo "<br/>";
echo $_POST['nombre'];
echo "<br/>";
echo $_POST['ano'];
echo "<br/>";
$myfavgame = urlencode("pepe");
echo "<a href='3.php?favgame=$myfavgame'>";
echo "Clica aqui para saber tu juego favorito"; 
echo "</a>";
echo "<br/>";

$nombre_usuario = $_GET['user'] ?? 'nadie';
// Esto equivale a:
$nombre_usuario = isset($_GET['user']) ? $_GET['user'] : 'nadie';

// La fusión se puede encadenar: esto devolverá el primer
// valor definido de $_GET['usuario'], $_POST['usuario'],
// y 'nadie'.
$nombre_usuario = $_GET['user'] ?? $_POST['user'] ?? 'nadie';

echo $nombre_usuario;
echo " ";
$nombre_usuario = $_GET['usuario'] ?? 'nadie';
// Esto equivale a:
$nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';

// La fusión se puede encadenar: esto devolverá el primer
// valor definido de $_GET['usuario'], $_POST['usuario'],
// y 'nadie'.
$nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'nadie';

echo $nombre_usuario;
?>
</body>
</html>
