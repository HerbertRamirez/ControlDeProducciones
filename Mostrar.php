<meta charset="utf-8" />

<center><h3>Lista de producciones actuales</h3></center>
<center>ingrese mas temporadas de </center>
<center>The Walking dead o Juegos de tronos</center>
<center><a href= principal.php>dando clic acá</center>


<?php
include("conexion.php");
$consulta=mysql_query("SELECT DISTINCT Nombre, Pertenencia FROM producciones ORDER BY Pertenencia, Nombre") or die(
mysql_error());

$registro=mysql_fetch_array($consulta);
do{
$nom=$registro['Nombre'];
echo"<br/><center><h3>$nom</h3></center>";
}while($registro=mysql_fetch_array($consulta));

?>


