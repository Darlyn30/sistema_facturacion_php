<?php


if(!empty($_POST["btnLogIn"])) {
    if(!empty($_POST["code"] and !empty($_POST["pin"]))) {

        $code=$_POST["code"];
        $pin=$_POST["pin"];



        $sql=$conexion->query(" select * from empleado where Codigo_empleado='$code' AND PIN=$pin ");
        $rol = $conexion->query(" select Rol from empleado where Codigo_empleado='$code' ");
        $result = $rol->fetch_assoc();
        $valor = $result["Rol"];
    
        if($datos=$sql->fetch_object()){
            
            if($valor == "Cajero"){

                header("location:Cajero.php");
            } else {
                header("location:Inventario.php");
            }
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            
        }
    } else {
        echo '<div class="alert alert-warning">Algun Campo esta vacio</div>';
    }

}

?>