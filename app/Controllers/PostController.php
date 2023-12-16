<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $fecha = date("Y-m-d H:i:s");

    $sql = "INSERT INTO articulo (titulo, contenido, fecha) VALUES ('$titulo', '$contenido', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: post-create.php");
        exit();
    } else {
        echo "Error al guardar el artículo: " . $conn->error;
    }
}

$conn->close();
