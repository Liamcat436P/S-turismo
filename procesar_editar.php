<?php
if(isset($_POST['txtID'])){
include('conexion_bd.php');
$conexion=mysqli_connect("localhost", "root","", "seturismob");
$conex=conectar();
$ID=$_POST['txtID'];
$NAME=$_POST['txtname'];
$EMAIL=$_POST['txtemail'];
$DOCUMENT=$_POST['txtdocument'];
$ROLE=$_POST['txtrole'];
$PASSWORD=md5($_POST['txtpassword']);
$PHOTO=$_POST['photo'];

$SQL="UPDATE usuario SET name = '$NAME', email = '$EMAIL', document = '$DOCUMENT', 
role = '$ROLE', password = '$PASSWORD', photo = '$PHOTO' WHERE id = '$ID'";
$reg=mysqli_query($conex, $SQL);
if($reg){
	echo "<script> alert('Registro Actualizado!'); </script>";
	mysqli_close($conex);
	header('refresh:0.1 URL=mostrar.php');
}else{
	mysqli_close($conex);
}

}
//header("Location:mostrar.php");

?>