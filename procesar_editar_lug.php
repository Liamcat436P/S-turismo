<?php
if(isset($_POST['txtID'])){
include('conexion_bd.php');
$conexion=mysqli_connect("localhost", "root","", "seturismob");
$conex=conectar();
$ID=$_POST['txtID'];
$IMAGE=$_POST['txtimage'];
$NAME=$_POST['txtname'];
$ADRESS=$_POST['txtadress'];
$DESCRIPTION=$_POST['txtdescription'];
$PHONE=$_POST['txtphone'];
$CATEGORY=$_POST['txtcategory'];

$SQL="UPDATE lugares SET image = '$IMAGE', name = '$NAME', adress = '$ADRESS', 
description = '$DESCRIPTION', phone = '$PHONE', category = '$CATEGORY' WHERE id = '$ID'";
$reg=mysqli_query($conex, $SQL);
if($reg){
	echo "<script> alert('Registro Actualizado!'); </script>";
	mysqli_close($conex);
	header('refresh:0.1 URL=lugares.php');
}else{
	mysqli_close($conex);
}

}
//header("Location:lugares.php");

?>