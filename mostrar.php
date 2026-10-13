<?php
session_start();
if(!isset($_SESSION['tipo'])){
  echo "<script> alert('No se ha iniciado una session!'); </script>";
  header('refresh:0.1 URL=login.php');
}
if(!$_SESSION['tipo']=="Administrador"){
  echo "<script> alert('Usuario Sin Permiso para esta session'); </script>";
  header('refresh:0.1 URL=login.php');
}

include('conexion_bd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mostrar.css">
    <title>Tabla</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="menu">
                <a class="logo">séturismo</a>
                <label for="menu"> bienvenido <?php echo $_SESSION['name'];?>
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="registro.html">Nuevo Registro</a> </li>
                        <li><a href="Admin.php">Incio</a> </li>
                    </ul>
                </nav>

    </header>
<!---mostrar-->
<div class="espacio-tabla">
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Identificación</th>
      <th scope="col">tipo de usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

<?php
$conexion=mysqli_connect("localhost", "root","", "seturismob");


   $sql="SELECT * FROM usuario";
   $result = mysqli_query($conexion, $sql);
   while($mostrar = mysqli_fetch_array($result)){



?>

    <tr>
      <td><?php echo $mostrar['name']?></th>
      <td><?php echo $mostrar['email']?></th>
      <td><?php echo $mostrar['document']?></th>
      <td><?php echo $mostrar['role']?></th>
      <td><?php echo $mostrar['password']?></th>
      <td><?php echo $mostrar['photo']?></th>
       <td>
           <!--editar-->
          <a class="btn btn-success" href="editar.php?id=<?php echo $mostrar['ID']?>">Editar</a>
           </td>
           <td>
           <!---eliminar-->
           <form action="eliminar.php" method="POST">
               <input type="hidden" name="<?php echo $mostrar['ID'] ?>" name="txtID" readonly>
               <a class="btn btn-danger" href="eliminar.php?id=<?php echo $mostrar['ID']?>">Eliminar</a>
           </form>
       </td>
    </tr>
    <?php
}

    ?>
  </tbody>
</table>
</div>
</body>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>