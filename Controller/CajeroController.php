<?php

include "Models/Conexion.php";

if(!empty($_POST["btnPay"])) {

    $sql=$conexion->query(" delete from carrito ");

    if($sql == 1) {

        echo '<div class="alert alert-success">Pago realizado exitosamente</div>';
    } else {
        echo '<div class="alert alert-warning">No se pudo efectuar el pago</div>';
    }
}


?>