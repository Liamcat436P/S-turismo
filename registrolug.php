<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include('conexion_bd.php');
$conex=conectar();
//$photo=$_POST['image'];
$name=$_POST['txtname'];
$adress=$_POST['txtadress'];
$description=$_POST['txtdescription'];
$phone=$_POST['txtphone'];
$category=$_POST['txtcategory'];

$conexion=mysqli_connect("localhost", "root","", "seturismob");

if($fila==0){
	$sql="select max(ID) as max from lugares";
	$rsql=mysqli_query($conex,$sql);
	$u=mysqli_fetch_array($rsql);
	$next=$u['max']+1;
	echo $next;
	$name_arch=$_FILES['image']['name']; 
	$tmb_arch=$_FILES['image']['tmp_name'];
	$tipo_arch=$_FILES['image']['type'];
	$len=strlen($name_arch);
	$pos=strpos($name_arch,".");
	$lenext=$len-$pos;
	$ext=substr($name_arch,$pos);
	$namea=$next.$ext;
	if (!file_exists("imagenes/lugares")){
		mkdir("..imagenes/lugares");
	}
	$ub_archivo="imagenes/lugares/".$namea;
	move_uploaded_file($tmb_arch, $ub_archivo);
	
		$consulta="INSERT INTO lugares (image, name, adress, description, phone, category) VALUES ('$ub_archivo', '$name', '$adress', '$description', '$phone', '$category')";
		//echo $consulta;

		$resultado=mysqli_query($conex,$consulta) or die("error de registro");

		if($resultado){
			echo "<script> alert('Registro Exitoso!'); </script>";
			mysqli_close($conex);
			header('refresh: 1 URL=index.html');
		}else{
			mysqli_close($conex);
			echo "Error al guardar la informacion";
		}
}
else{
	echo "<script> alert('El Usuario ya existe en el sistema !'); </script>";
	mysqli_close($conex);
	header('refresh: 1 URL=registro.html');
}	

?>