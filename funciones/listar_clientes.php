<h1>PODUCTOS DISPONIBLES</h1>

<div class="container">
    <?php

    include("../Conexion/Conexion.php");
    

    $query = mysqli_query($conexion, "SELECT * FROM productos");

    $resultado = mysqli_num_rows($query);
    if($resultado>0){
        while ($row =mysqli_fetch_array($query)) {

            ?>

            <div class="card">
                <h4>
                    <?php echo $row['nombre_producto']; ?>
                </h4>
                <img src="<?php echo ($row['img']); ?>">
                <h5 class="texto">
                    <?php echo $row['descripcion_producto'] ?>
                </h5>

                <p><span>Precio: </span>
                    <?php echo $row['precio_producto']; ?>
                </p>
                <a href="#">Ver mas...</a>

            </div>

            <?php
        }

        

    }
 ?>

</div>