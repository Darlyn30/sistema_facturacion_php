<?php


// si el cliente quiere eliminar algo del carrito
if(!empty($_POST["btnDeleteCart"])){
    $id=$_POST["idCart"];
    $sql=$conexion->query(" delete from carrito where Codigo_Producto = $id ");
}
    



?>