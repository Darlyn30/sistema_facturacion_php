<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- ICON AWESOME -->
</head>
<body>
    
    

    <?php
    include "Models/Conexion.php";
    include "Controller/LoguearController.php";

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">codigo de empleado</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Ingresa tu codigo de empleado">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">PIN de empleado</label>
                                <input type="password" class="form-control" id="pin" name="pin" placeholder="Ingresa tu PIN de empleado">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="btnLogIn" value="ok">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>