<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include('conexion_bd.php');
$conex=conectar();
$name=$_POST['txtname'];
$email=$_POST['txtemail'];
$document=$_POST['txtdocument'];
//$role=$_POST['txtrole'];
$password=md5($_POST['txtpassword']);
//$photo=$_POST['photo'];

$sql="select * from usuario where email='".$email."' or document='".$document."'";
echo $sql;
$res=mysqli_query($conex,$sql);
$fila=mysqli_num_rows($res);
echo $fila;
if($fila==0){
	$sql="select max(ID) as max from usuario";
	$rsql=mysqli_query($conex,$sql);
	$u=mysqli_fetch_array($rsql);
	$next=$u['max']+1;
	echo $next;
	$name_arch=$_FILES['photo']['name']; 
	$tmb_arch=$_FILES['photo']['tmp_name'];
	$tipo_arch=$_FILES['photo']['type'];
	$len=strlen($name_arch);
	$pos=strpos($name_arch,".");
	$lenext=$len-$pos;
	$ext=substr($name_arch,$pos);
	$namea=$next.$ext;
	if (!file_exists("imagenes/perfiles")){
		mkdir("imagenes/perfiles");
	}
	$ub_archivo="imagenes/perfiles/".$namea;
	move_uploaded_file($tmb_arch, $ub_archivo);
	
		$consulta="INSERT INTO usuario (name, email, document, role, password, photo) VALUES ('$name', '$email', '$document','Usuario' ,'$password', '$ub_archivo')";
		//echo $consulta;

		$resultado=mysqli_query($conex,$consulta) or die("error de registro");

		if($resultado){
			echo "<script> alert('Registro Exitoso !'); </script>";
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