<?php

include('/xampp/htdocs/qualifiedPractice8/config/database.php');

$conn = conexion();

if (isset($_GET['eliminar'])) {
    $id_articulo = $_GET['eliminar'];
    $sql_delete = "DELETE FROM articulo WHERE id = $id_articulo";
    mysqli_query($conn, $sql_delete);
}

$sql = "SELECT * FROM articulo";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/read.css">
    <title>Lista de Artículos</title>
</head>

<body>
    <div class="title">
        <h2>Listado de Artículos</h2>
    </div>
    <div class="container">
        <?php while ($row = mysqli_fetch_array($query)) : ?>
            <div class="info">
                <h1 class="titulo"><?= $row['titulo'] ?> </h1>
                <p><?= $row['contenido'] ?></p>
                <p>Publicado el: <?= $row['fecha'] ?></p>
                <p class="delete"><a href="?eliminar=<?= $row['id'] ?>">Eliminar</a></p>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="new">
        <a href="/resources/views/post-create.php">Nuevo Artículo</a>
    </div>
</body>

</html>