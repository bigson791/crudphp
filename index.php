<?php

require_once('config/database.php');
$activo = 1;
$db = new Database();
$con = $db->conectar();
$comando = $con->prepare("SELECT id, codigo, descripcion, stock FROM productos where activo=:mi_activo ORDER BY codigo asc;");
$comando->execute([":mi_activo" => $activo]);
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
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

<body class="py-3">
    <main class="container">

        <div class="row">
            <div class="col">
                <h4>Productos</h4>
                <a href="nuevo.php" class="btn btn-info"><i class="fa-solid fa-plus"></i> Nuevo Producto</a>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Descripcion</th>
                            <th>Stock</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($resultado as $producto) {
                        ?>
                            <tr>
                                <td><?php echo $producto['id'] ?></td>
                                <td><?php echo $producto['codigo'] ?></td>
                                <td><?php echo $producto['descripcion'] ?></td>
                                <td><?php echo $producto['stock'] ?></td>
                                <td><a class="btn btn-warning" href="editar.php?id=<?php echo $producto['id'] ?>"><i class="fa-solid fa-pencil"></i></a></td>
                                <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $producto['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>