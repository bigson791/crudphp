<?php

require_once('config/database.php');

$correcto = false;
$codigo = $_POST['txtCodigo'];
$descripcion = $_POST['txtDescripcion'];
$inventariable = isset($_POST['inventariable']) ? $_POST['inventariable'] : 0;
$stock = $_POST['txtstock'];

$db = new database();
$con = $db->conectar();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query =  $con->prepare("UPDATE productos set codigo = :codigo, descripcion = :descripcion, stock = :stock, inventariable = :inventariable where id = :id");
    $result =  $query->execute(array(":codigo" => $codigo, ":descripcion" => $descripcion, ":stock" => $stock, ":inventariable" => $inventariable, ":id" => $id));

    if($result==true){
        $correcto = true;
    }
} else {
    $query = $con->prepare("INSERT INTO productos (codigo, descripcion, stock, inventariable, activo) 
    VALUES(:codigo, :descripcion, :stock, :inventariable,1)");
    $result = $query->execute(array(":codigo" => $codigo, ":descripcion" => $descripcion, ":stock" => $stock, ":inventariable" => $inventariable));

    if ($result == true) {
        $correcto = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2bf9bac46.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">

        <div class="row">
            <div class="col">
                <?php if ($correcto) { ?>
                    <h4>Datos Guardados</h4>
                    <a href="index.php" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                <?php } else { ?>
                    <h4>Ocurrio un error al guardar</h4>
                    <a href="index.php" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                    <a href="nuevo.php" class="btn btn-warning"><i class="fa-solid fa-plus"></i> Intentarlo de nuevo</a>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>