<?php
include('conexion_bd.php');
$conex=conectar();

$ID=$_GET["id"];
mysqli_query ($conex, "DELETE FROM usuario where ID='$ID'")or die("error al eliminar");
mysqli_close($conex);
header("location:mostrar.php");


?>