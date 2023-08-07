<?php
include("../Conexion/Conexion.php");

if (isset($_POST['Guardar'])) {

    if (empty($_POST['nombres']) || empty($_POST['descripcion']) || empty($_POST['precio'])) {
        echo "por favor llene todos los campos";
    } else {
        $nombres = trim($_POST['nombres']);
        $descripcion = trim($_POST['descripcion']);
        $precio = trim($_POST['precio']);
        $img = $_FILES['imagen']['name'];
        $temporal = $_FILES['imagen']['tmp_name'];
        $carpeta = '../img';
        $ruta = $carpeta . '/' . $img;
        move_uploaded_file($temporal, $carpeta . '/' . $img);

        $query = "INSERT INTO productos(nombre_producto, descripcion_producto, precio_producto, img ) VALUES('$nombres','$descripcion','$precio','$ruta')";
        $resultado = $conexion->query($query);

        if ($resultado) {
            echo "se han insertado los datos";

        } else {
            echo "no se han insertado los datos";
        }
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
    <link rel="stylesheet" href="../Style/styleInsert.css">
</head>

<body>
    <header>
        <img src="../img/logo.png" alt="">
        <nav>
            <a href="index.php" id="ida">Inicio</a>
            <a href="insertar_producto.php" id="id">Nuevo Producto</a>
            <a href="insert_usuario.php" id="ida">Nuevo Usuario</a>
            <a href="usuario.php" id="ida">Usuario</a>
            <a href="#" id="ida"> Mi Carrito</a>
        </nav>
    </header>

    <h1>
        Agregar Nuevo Producto
    </h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <h2>Ingrese los Datos Correspondientes</h2>

        <div class="container">
            <div class="label_container">
                <label>Nombre: </label>
                <input type="text" name="nombres"><br><br>
                <label>Descripcion: </label>
                <textarea type="text" name="descripcion" rows="10" cols="30"></textarea><br><br>
                <label>Precio: </label>
                <input type="number" name="precio" step="0.01"><br><br>
            </div>
            <div class="file_container">
            <label>Imagen</label>
            <input type="file" name="imagen" required="" id="foto" onchange="vista_preliminar(event)"><br>
            <img src="" alt="" id="img_foto">


            </div>
            
        </div>

        <center>
            <input type="submit" name="Guardar" value="Guardar">
        </center>
    </form>

    <script>

        let vista_preliminar=(event)=>{
            let leer_img = new FileReader();
            let id_img =document.getElementById('img_foto');

            leer_img.onload=()=>{
                if(leer_img.readyState==2){
                    id_img.src=leer_img.result
                }
            }

            leer_img.readAsDataURL(event.target.files[0])
        }


    </script>

</body>

</html>