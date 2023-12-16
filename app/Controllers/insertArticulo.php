<?php
include('/xampp/htdocs/qualifiedPractice8/config/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $sql = "INSERT INTO articulo (titulo, contenido, fecha) VALUES ('$titulo', '$contenido', NOW())";

    $conn = conexion();

    if (mysqli_query($conn, $sql)) {
        header("Location: /resources/views/post-read.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
