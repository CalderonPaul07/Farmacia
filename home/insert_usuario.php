<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuario</title>
    <link rel="stylesheet" href="../Style/styleInsertUsuario.css">
</head>

<body>
    <header>
        <img src="../img/logo.png" alt="">
        <nav>
            <a href="index.php" id="ida">Inicio</a>
            <a href="insertar_producto.php" id="ida">Nuevo Producto</a>
            <a href="insert_usuario.php" id="id">Nuevo Usuario</a>
            <a href="usuario.php" id="ida">Usuario</a>
            <a href="#" id="ida"> Mi Carrito</a>

        </nav>

    </header>

    <h1>
        Agregar Nuevo Cliente
    </h1>


    <form action="" method="POST" >

        <h2>Ingrese los Datos del Cliente</h2>

        <div class="container">
            <div class="label_container">
                <label>Nombre: </label>
                <input type="text" name="nombres"><br><br>
                <label>Apellido: </label>
                <input type="text" name="apellido"><br><br>
            </div>

        </div>

        <center>
            <input type="submit" name="Guardar" value="Guardar">
        </center>
    </form>
    <?php 
    include('../funciones/insertarCliente.php');
    
    ?>



</body>

</html>