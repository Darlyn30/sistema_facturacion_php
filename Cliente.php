<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- ICON AWESOME -->
</head>
  <body>



    <h1 class="text-center p-3">MERCADITO</h1>
    <?php
    include "Models/Conexion.php";
    
    ?>
    <div class="container-fluid row">

        <div class="col-8 p-3">
            <table class="table">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">ID producto</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Models/Conexion.php"; #importamos el archivo de donde proviene la conexion del archivo .php
                    $sql=$conexion->query(" select * from inventario "); #la sentencia SQL que vamos a ejecutar

                    while($datos=$sql->fetch_object()){?>
                        
                        <tr>
                        <td><?= $datos->Codigo_Producto #tenemos que importar de esta forma para buscar en la db?></td>
                        <td><?= $datos->Nombre_Producto?></td>
                        <td><?= $datos->Precio?> USD</td>
                        <td>
                            <?php
                            
                            include "Controller/CompraController.php";
                            ?>
                            <form action="" method="POST">
                                <button type="submit" name="btnCart" value="ok" class="btn btn-samll btn-warning">
                                <input type="hidden" name="id" id="" value="<?=$datos->Codigo_Producto?>" readonly>
                                
                                <i class="fa fa-shopping-cart"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-8 p-3">
            <h1>CARRITO</h1>
            <table class="table">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Models/Conexion.php"; #importamos el archivo de donde proviene la conexion del archivo .php
                    $sql2=$conexion->query(" select * from carrito "); #la sentencia SQL que vamos a ejecutar

                    while($data=$sql2->fetch_object()){?>
                        <tr>
                        <td><?= $data->Nombre #tenemos que importar de esta forma para buscar en la db?></td>
                        <td><?= $data->Precio?> USD</td>
                        <td>
                            <?php
                            include "Models/Conexion.php";
                            include "Controller/EliminarCarrito.php";
                            ?>
                             <form action="" method="POST">
                                <button type="submit" name="btnDeleteCart" value="ok" class="btn btn-samll btn-danger">
                                <input type="hidden" name="idCart" id="" value="<?=$data->Codigo_Producto?>" readonly>
                                
                                <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>