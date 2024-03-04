<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2bf9bac46.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">

        <div class="row">
            <div class="col">
                <h4>Nuevo Registro</h4>

            </div>
        </div>
        <div class="row">
            <form method="POST" action="guarda.php" class="row g-3" autocomplete="off">
                <div class="col-md-4">
                    <label for="txtCodigo" class="form-label">Codigo</label>
                    <input type="text" id="txtCodigo" name="txtCodigo" required autofocus class="form-control">
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="txtDescripcion" class="form-label">Descripcion</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" required autofocus class="form-control">
                    </div>
                </div>
                <h5>Inventario</h5>
                <div class="col-md-12">
                    <div class="form-check">
                        <label for="inventariable" class="form-check-label">Usa Inventario</label>
                        <input type="checkbox" id="inventariable" name="inventariable" class="form-check-input" value="1">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="txtstock" class="form-label">Stock</label>
                    <input type="number" id="txtstock" name="txtstock" required autofocus class="form-control">
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-secondary" style="float: center;" href="index.php"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                    <button type="submit" class="btn btn-primary"> <i class="fa-regular fa-floppy-disk"></i> Guardar</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>