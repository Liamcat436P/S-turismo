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
   $sql="SELECT * FROM lugares where ID=".$id;
   $resultado = mysqli_query($conexion, $sql);
   $mostrar = mysqli_fetch_array($resultado);

?>

       <form>
       <input class="text-center bg-dark" type="hidden" value="<?php echo $mostrar['ID']?>" name="txtID">
        <h1 class="text-center blanco">información</h1>
      <center><img src="<?php echo $mostrar['image']; ?>" width="130px" height="130px"></center>
      <div class="mb-3"><br>
        <label for="exampleInputEmail1" class="form-label blanco">nombre: <?php echo $mostrar['name']?></label>
      </div>
      <div class="mb-3"><br>
        <label for="exampleInputEmail1" class="form-label blanco">direción: <?php echo $mostrar['adress']?></label>
        </div>
        <div class="mb-3"><br>
        <label for="exampleInputEmail1" class="form-label blanco">descripción: <?php echo $mostrar['description']?></label>
        </div>
        <div class="mb-3"><br>
        <label for="exampleInputEmail1" class="form-label blanco">teléfono: <?php echo $mostrar['phone']?></label>
         </div>
        
       </select>
   <br><br>

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