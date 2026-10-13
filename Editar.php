<?php
include('conexion_bd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Información</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="menu">
                <a class="logo">séturismo</a>
                <label for="menu">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="usuario.php">Volver</a> </li>
                    </ul>
                </nav>

    </header>
        <div class="modal-body modal-dialog">
            <div class="container col-lg-11">
                <div class="modal-content col-lg-9 bg-dark">
                    <!---botones de cambio-->
                    
                    <!---hasta aqui-->
<!---mostrar-->
<div class="espacio-tabla">
    <table class="table table-dark table-striped">
  <thead>
    
  </thead>
  <tbody>

<?php
$conexion=mysqli_connect("localhost", "root","", "seturismob");

   $id = $_GET["id"];
   $sql="SELECT * FROM usuario where ID=".$id;
   $resultado = mysqli_query($conexion, $sql);
   $mostrar = mysqli_fetch_array($resultado);

?>

       <form action="procesar_editar.php" method="POST">
       <input class="text-center bg-dark" type="hidden" value="<?php echo $mostrar['ID']?>" name="txtID">
        <label for="exampleInputEmail1" class="form-label blanco">Nombre</label>
       <input type="text" class="form-control  bg-light" value="<?php echo $mostrar['name']?>" name="txtname">
        <label for="exampleInputEmail1" class="form-label blanco">Correo</label>
       <input type="text" class="form-control  bg-light" value="<?php echo $mostrar['email']?>" name="txtemail">
        <label for="exampleInputEmail1" class="form-label blanco">Identificación</label>
       <input type="text" class="form-control  bg-light" value="<?php echo $mostrar['document']?>" name="txtdocument">
       <label for="exampleInputEmail1" class="form-label blanco">Tipo de usuario</label>
       <select name="txtrole" >
         <option value="Usuario" class="form-control  bg-light" <?php if($mostrar['role']=='Usuario'){echo "Selected";} ?> >Usuario</option>
         <option Value="Administrador" <?php if($mostrar['role']=='Administrador'){echo "Selected";} ?> >Administrador</option>
       </select>
       <input type="hidden" class="form-control  bg-light" name="Codigo" value="<?php echo $mostrar['Codigo']; ?>">
       <!-- <input type="text" value="<?php echo $mostrar['role']?>" name="txtrole">-->
        <label for="exampleInputEmail1" class="form-label blanco">Contraseña</label>
        <input type="password" class="form-control  bg-light" value="<?php echo $mostrar['password']?>" name="txtpassword">
        <label for="exampleInputEmail1" class="form-label blanco">Subir foto</label>
       <input type="file" class="form-control  bg-light" value="<?php echo $mostrar['photo']?>" name="photo">
   <br><br>
   <button type="submit" class="btn btn-success">Actualizar</button>

</form>
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