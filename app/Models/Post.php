<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM articulo WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: post-read.php");
        exit();
    } else {
        echo "Error al eliminar el artículo: " . $conn->error;
    }
} else {
    echo "Parámetros incorrectos para eliminar el artículo.";
}

$conn->close();
