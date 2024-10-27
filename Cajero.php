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
        <a onclick="return backHome()" href="Index.php" class="btn btn-secondary ml-end"><i class="fa-solid fa-sign-out-alt"></i></a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="productList">
                <!-- Productos añadidos aparecerán aquí -->
            </tbody>
        </table>

        <div class="text-end">
            <h4>Total: $<span id="totalAmount">0.00</span></h4>
            <button class="btn btn-success mt-2" id="checkoutBtn">Realizar Pago</button>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
