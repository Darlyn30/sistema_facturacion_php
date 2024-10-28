<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Caja</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

</head>
<body>

    <script>
        function backHome(){
            var res = confirm("Estas seguro que desea salir");
            return res;
        }
    </script>
    <div class="container mt-5">

        <h2 class="mb-4">Sistema de Caja</h2>
        <?php
        include "Models/Conexion.php";
        include "Controller/CajeroController.php";
        ?>
        <a onclick="return backHome()" href="Index.php" class="btn btn-secondary ml-end"><i class="fa-solid fa-sign-out-alt"></i></a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                    <th>IVA</th>
                </tr>
            </thead>
            <tbody id="productList">
                <!-- Productos añadidos aparecerán aquí -->

                <?php
                    include "Models/Conexion.php"; #importamos el archivo de donde proviene la conexion del archivo .php
                    $sql2=$conexion->query(" select * from carrito "); #la sentencia SQL que vamos a ejecutar

                    while($data=$sql2->fetch_object()){?>
                        <tr>
                        <td><?= $data->Nombre #tenemos que importar de esta forma para buscar en la db?></td>
                        <td><?= $data->Precio?> USD</td>
                        <td><?= $data->Precio?> USD</td>
                        <td>1.40 USD</td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>

        <div class="text-end">
            <?php
            $sql=$conexion->query(" select Precio from carrito ");
            $data=$sql->fetch_object();
            if($data != 1){
                $total=0;
            } else {

                $total=$data->Precio + 1.40; #tengo un problema en esta parte, es que parece que estaria tomando un entero pero no se de donde
            }
            ?>
            <h4>Total: $<span id="totalAmount"><?= $total?></span></h4>
            <form action="" method="POST">

                <button class="btn btn-success mt-2" name="btnPay" value="ok">Realizar Pago</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
