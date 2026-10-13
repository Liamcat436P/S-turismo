<?php 
function conectar(){
$conexion=mysqli_connect("localhost", "root","", "seturismob");
return $conexion;
}
//$conexion->set_charset("uft8");

?>