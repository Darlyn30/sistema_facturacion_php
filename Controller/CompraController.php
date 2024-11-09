<?php


if(!empty($_POST["btnCart"])){
    $id=$_POST["id"];
    
    $sql=$conexion->query(" call sp_addCartttt($id) ");

    if($sql==1){
        header("location:Cliente.php"); //no es lo mas optimo, pero me resuelve el problema mientras tanto
    }
}



?>