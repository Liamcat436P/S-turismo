<?php
session_start();
if(!isset($_SESSION['tipo'])){
  echo "<script> alert('No se ha iniciado una session!'); </script>";
  header('refresh:0.1 URL=login.php');
}
if($_SESSION['tipo']!='Usuario'){
  echo "<script> alert('No tiene permisos para esta session!'); </script>";
  header('refresh:0.1 URL=login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SÉTURISMO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="imd/png" href="imagenes/SETURISMO-LOGOTIPO.jpg">
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="menu">
				<img src="imagenes/SETURISMO-LOGOTIPO.jpg" width="10%">
				<a href="" class="logo">bienvenid@ <?php echo $_SESSION['name'];?></a><br>
				<img src="<?php echo $_SESSION['photo']; ?> " height="80px"; width="80px"; border-radius="50%"; >
				<input type="checkbox" id="menu">
				<label for="menu">
					<img class="menu-icono" src="imagenes/menu2.png">
				</label>
				<nav class="navbar">
					<ul>
						<li><a href="cerrar.php">Cerrar sesión</a> </li>
		   			<li><a href="formlugaresp.php">Ingresa tu local</a> </li>
						<li><a href="perfil.php">Perfil</a> </li>

					</ul>
				</nav>
			</div>
			<div class="header-content">
			<form action="" Method="POST">
				<select  class="form-label blanco" name="Campo">
				<option  value=0>Todos</option>
			<?PHP 
				include('conexion_bd.php');
				$conexion=conectar();
				$cat="Select * From categoria";
				$rcat=mysqli_query($conexion,$cat);
				while($c=mysqli_fetch_array($rcat)){
					echo "<option Value=".$c['Codigo'].">".$c['Descripcion']." </option>";

				}
			 ?>
				</select>
					<input type="submit" class="btn-1" Value="Buscar" name="enviar">
				</form><br>
				
			</div>
		</div>

	</header>
	
	</section>
	

<section class="testimonio container">
		<h2>LUGARES</h2>	

<?php 
$fil="";
if(isset($_POST['enviar'])){
	$campo=$_POST['Campo'];
	if($_POST['Campo']!=0){
	$fil=" where Category=".$campo;
	}
}
$csta="Select * from lugares".$fil;
echo $csta;
$conexion=mysqli_connect("localhost", "root","", "seturismob");
$resul=mysqli_query($conexion,$csta);
$n=mysqli_num_rows($resul);
if($n>0){
	$n=1;
	echo "<div class='testimonio-content'>";
	while ($lu=mysqli_fetch_array($resul)) {
		?>
			
			<div class="testimonio-1">
				<a href="Descripsitio.php?id=<?php echo $lu['ID']; ?>"><img src="<?php echo $lu['image']; ?>"></a>
				<h3><?php echo $lu['name']?></h3>
				<p>
					<?php echo $lu['description']?>
				</p>
			</div>

		<?php
		IF($n%3==0){
			echo "</div><div class='testimonio-content'>";
		}
		$n++;		 
	}
	echo "</div>";

}


//$conexion->set_charset("uft8");

?>
		
	</section>
	
		


	<footer class="footer container">
		<div class="footer-content">
			<a href="#" class="logo"></a>
			<ul>
				
			</ul>
		</div>

	</footer>

</body>
</html>