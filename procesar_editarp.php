<?php
if(isset($_POST['txtID'])){
include('conexion_bd.php');
$conexion=mysqli_connect("localhost", "root","", "seturismob");
$conex=conectar();
$ID=$_POST['txtID'];
$NAME=$_POST['txtname'];
$EMAIL=$_POST['txtemail'];
$PHOTO=$_POST['photo'];

$SQL="UPDATE usuario SET name = '$NAME', email = '$EMAIL', photo = '$PHOTO' WHERE id = '$ID'";
$reg=mysqli_query($conex, $SQL);
if($reg){
	echo "<script> alert('Perfil Actualizado!'); </script>";
	mysqli_close($conex);
	header('refresh:0.1 URL=usuario.php');
}else{
	mysqli_close($conex);
}

}
//header("Location:usuario.php");

?>