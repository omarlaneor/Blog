<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/create.css">
    <title>Agregar Artículo</title>

</head>

<body>
    <h1>Agregar Nuevo Artículo</h1>
    <form action="../../app/Controllers/insertArticulo.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="4" required></textarea>
        <br>
        <a href="/resources/views/post-read.php">
            <button type="submit">Guardar Artículo</button></a>
    </form>
</body>

</html>