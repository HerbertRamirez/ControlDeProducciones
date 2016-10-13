<?php

 $user="root";
 $pass="";
 $server="localhost";
 $db="controlseries";
mysql_connect($server,$user,$pass) or die("error al conectar" .mysql_error());
 mysql_select_db($db); 


?>