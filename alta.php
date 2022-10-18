<?php

$host='localhost';
$bd='postgres';
$user='postgres';
$pass='Civilwar24abril$';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO formulariodos(nombre,grupo,carrera,descrip,plantel,imagen,imagendos)
VALUES('$_REQUEST[name]','$_REQUEST[ngrupo]','$_REQUEST[carreras]','$_REQUEST[ndescripcion]','$_REQUEST[nplantel]','$_REQUEST[nimagenes]','$_REQUEST[nimagenesdos]')");

$consulta=pg_query($conexion,$query);
pg_close();
echo 'TE HAS REGISTRADO CORRECTAMENTE, YA PUEDES CERRAR ESTA PAGINA';

?>