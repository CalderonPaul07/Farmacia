<?php
include("../Conexion/Conexion.php");

if (isset($_POST['Guardar'])) {

    if (empty($_POST['nombres']) || empty($_POST['apellido'])) {
        echo "por favor llene todos los campos";
    } else {

        $nombres = trim($_POST['nombres']);
        $apellido = trim($_POST['apellido']);
    
        $query = "INSERT INTO clientes(nombre, apellido) VALUES('$nombres','$apellido')";
        $resultado = $conexion->query($query);

        if ($resultado) {
            echo "se han insertado los datos";

        } else {
            echo "no se han insertado los datos";
        }
    }


}

?>

