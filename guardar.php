<?php
include 'conexion.php';

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO personas (nombre, apellido, email, telefono, fecha_nacimiento)
        VALUES ('$nombre', '$apellido', '$email', '$telefono', '$fecha')";

if ($conexion->query($sql) === TRUE) {
    header("Location: listar.php");
} else {
    echo "Error: " . $conexion->error;
}
?>
