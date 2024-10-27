<?php


if(!empty($_POST["btnLogIn"])) {
    if(!empty($_POST["code"] and !empty($_POST["pin"]))) {

        $code=$_POST["code"];
        $pin=$_POST["pin"];



        $sql=$conexion->query(" select * from empleado where Codigo_empleado='$code' AND PIN=$pin ");
        $nombre=$conexion->query(" select Nombre from empleado where Codigo_empleado='$code'");
        $res = $nombre->fetch_assoc();
        $value = $res["Nombre"];
        
        
        
        $rol = $conexion->query(" select Rol from empleado where Codigo_empleado='$code' ");
        $result = $rol->fetch_assoc();
        $valor = $result["Rol"];
    
        $sql2= $conexion->query(" insert into registro_empleado(Codigo_empleado, Nombre, Rol, Fecha_Ingreso) values ('$code','$value','$valor', now()) ");
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