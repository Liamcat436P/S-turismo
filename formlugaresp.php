<?php
include('conexion_bd.php');
$conexion=conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Formulario</title>
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
                        <li><a href="usuario.php">Inicio</a> </li>
                    </ul>
                </nav>

    </header>
        <div class="modal-body modal-dialog">
            <div class="container col-lg-11">
                <div class="modal-content col-lg-9 bg-dark">
                    <!---botones de cambio-->
                    
                    <!---hasta aqui-->
                        <br>
                       
                <h1 class="text-center blanco">Formulario</h1>
    <!---formulario-->
                <form class="text-center bg-dark" action="registrolug.php" method="POST" enctype="multipart/form-data">
                    <img class="logo" src="imagenes/SETURISMO-LOGOTIPO.jpg" width="130px" height="130px">
                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Subir foto</label>
                      <input type="file" class="form-control  bg-light" name="image" >

                    </div>
                      <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Nombre</label>
                      <input type="text" class="form-control  bg-light" name="txtname" >

                    </div>

                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Dirección</label>
                      <input type="text" class="form-control  bg-light" name="txtadress" >

                    </div>
                    
                      <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Desripción</label>
                      <input type="text" class="form-control  bg-light" name="txtdescription" >

                    </div>
                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Número de teléfono</label>
                      <input type="text" class="form-control  bg-light" name="txtphone" >
                      </div>
                     
                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Categoría</label>
                      <select name="txtcategory">
                <option value=0>otro</option>
            <?PHP 
                $cat="Select * From categoria";
                $rcat=mysqli_query($conexion,$cat);
                while($c=mysqli_fetch_array($rcat)){
                    echo "<option Value=".$c['Codigo'].">".$c['Descripcion']." </option>";

                }
             ?>
                </select>
                    </div>
                    <div class="mb-3"><br>

                        <div id="emailHelp" class="verde">Verifique los datos proporcionados</div>
                     <button type="submit" class="btn btn-success">Registrar</button>
                      </div>
                    
                  </form><br>
                  <!---hasta aqui form-->
            </div>
            </div> 
        </div>
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>