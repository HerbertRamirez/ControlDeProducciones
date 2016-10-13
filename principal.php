<meta charset="utf-8" />
<?php
include ("conexion.php");

?>
<H3><center>ingrese mas temporadas de </center>
<center>The Walking dead o Juegos de tronos</center>
</H3>
<form action="" method="post">

 Nombre Producto:<br/>
 The walking dead<input checked value="1" type="radio" name="nom">
 Juegos de tronos<input value="2" type="radio" name="nom"> <br/>

 Tipo Producto:<br />
 Serie<input checked value="1" type="radio" name="genero">
 Pelicula<input value="2" type="radio" name="genero"> <br/>
 <input type="submit" />
 </form>
 
 <center><a href= Mostrar.php>Visualizar lista de producciones</a></center>

 <?php
  if ($_POST){ //SI SE HA PRESIONADO EL ENVIAR
  $n=$_POST['nom'];
  $g=$_POST['genero'];
      echo "<h2>Dato guardado</h2>";
     //el codigo de pertinencia est'a compuesto por dos digitos, el primero corresponde
	 //a si es de una serie o de otra, y el segundo digito corresponde al tipo de produccion
	 //es decir si es una serie o una pelicula, siendo por ejemplo
	 // 01, una serie de walking dead, pero si es 02, es una pelicula de walking dead.
     if (($n == 1) and ($g == 1)){ $g= 01;} else{$g=02;};
	 if (($n == 2) and ($g == 1)){ $g= 11;} else{$g=12;};
	 
	   if($n==1){$n="The walking dead";}
       if($n==2){$n="juegos de trono";}
	   
	   echo 
	   
	mysql_query("INSERT INTO Producciones(id,Nombre, Pertenencia)VALUES('NULL','$n','$g')") or die(mysql_error());  
    
  }
 ?>





