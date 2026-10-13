<?php
	include("conexion_bd.php");

	if (empty($_POST['email'])) {
		$error = 'los campos están vacíos';
	}
	else {
		$email=$_POST["email"];
		$password=md5($_POST['password']);
		$sql="select * from usuario where email='".$email."'"; //" and Contraseña LIKE '".$password."'";
		$conexion=mysqli_connect("localhost", "root","", "seturismob");
		$result = mysqli_query($conexion, $sql);
		if(mysqli_num_rows($result)>0){
			$u=mysqli_fetch_array($result);
			if($u['password']==$password){
				session_start();
				$_SESSION['id']=$u['ID'];
				$_SESSION['tipo']=$u['role'];
				$_SESSION['name']=$u['name'];
				$_SESSION['photo']=$u['photo'];

				switch ($u['role']) {
					case 'Usuario':
						header('location: usuario.php');
						break;
					case 'Administrador':
						header('location: admin.php');
						break;	
					
					default:
						# code...
						break;
				}
			

			}
			else{
				$error="Contraseña Errada!";
			}


		}else{
			$error = 'el usuario no existe';
		}

   		
			
		
	// code...
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" href="css/estilosinicio.css">
	<link rel="icon" type="imd/png" href="imagenes/SETURISMO-LOGOTIPO.jpg">

</head>

<body>
	<form method="POST" action="login.php">
		 <h2>Inicio de sesión</h2>
		 <?php

		 ?>
		 <label for="email">Correo</label>
		 <input type="text" name="email">

		 <label for="password">contraseña</label>
		 <input type="password" name="password">

		 <div class="remember">
		 	<p>Verifique sus datos</p>

		 <?php if(isset($error)) echo $error ?>

		 </div>
		 <button type="submit" class="btn btn-success">Iniciar</button>
         
         
         <a  class="btn-2" type="submit" href="registrou.html">¿aún no te has registrado?</a>

	</form>
</body>
</html> 