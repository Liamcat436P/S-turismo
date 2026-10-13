<?php

if (!empty($_POST['seturismob'])) {
	if (empty($_POST['Correo']) and empty(['contraseña'])) {
		echo '<div class="alert alert-danger"> los campos están vacíos</div>';
	} else {
		$correo=$_POST["Correo"];
		$usuario=$_POST["contraseña"];
		$sql=$conexion->query(" select * from usuario where Correo='$correo' and contraseña='$contraseña'");
		if ($datos=$sql->fetch_object()) {
			header("location:pagina_seturismo.html");
		} else {
			echo '<div class="alert alert-danger">el usuario no existe</div>';
		}
		
	}
	
	// code...
}

?>