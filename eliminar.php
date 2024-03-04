<?php

require_once('config/database.php');

$correcto = false;
$db = new database();
$con = $db->conectar();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query =  $con->prepare("DELETE FROM productos  where id = :id");
    $query->execute(array(":id" => $id));
    $filasAfectadas = $query->rowCount();
    if ($filasAfectadas>0) {
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
                    <h4>Registro Eliminado</h4>
                    <a href="index.php" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                <?php } else { ?>
                    <h4>No se elimino ningun registro</h4>
                    <a href="index.php" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>