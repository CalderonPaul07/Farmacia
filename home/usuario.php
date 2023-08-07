<?php 

include("../Conexion/Conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../Style/styleUsuari.css">
</head>
<body>
<header>
        <img src="../img/logo.png" alt="">
        <nav>
        <a href="index.php" id="ida">Inicio</a>
            <a href="insertar_producto.php" id="ida">Nuevo Producto</a>
            <a href="insert_usuario.php" id="ida">Nuevo Usuario</a>
            <a href="usuario.php" id="id">Usuario</a>
            <a href="#" id="ida"> Mi Carrito</a>
        </nav>


    </header>





<div class="row table-container">

<h1>Clientes Agregados</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>

        <?php

        $query="SELECT * FROM clientes";
        $execute=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

        while($fila = mysqli_fetch_array($execute)){
        
        ?>
        <tbody>
            <tr>
                <td><?php  echo $fila['id_usuario']?></td>
                <td><?php  echo $fila['nombre']?></td>
                <td><?php  echo $fila['apellido']?></td>
            </tr>

        </tbody>
        <?php
        }
        
        ?>
    </table>
</div>
    
</body>
</html>