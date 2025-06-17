<?php 
$conexion = new mysqli("localhost", "root", "", "proyecto_basico");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha_nacimiento'];

    $sql = "UPDATE personas SET 
        nombre='$nombre', apellido='$apellido', email='$email', 
        telefono='$telefono', fecha_nacimiento='$fecha'
        WHERE id=$id";

    $conexion->query($sql);
    header("Location: listar.php");
    exit;
}

$id = $_GET['id'];
$persona = $conexion->query("SELECT * FROM personas WHERE id=$id")->fetch_assoc();
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $persona['id'] ?>">
    <input type="text" name="nombre" value="<?= $persona['nombre'] ?>"><br>
    <input type="text" name="apellido" value="<?= $persona['apellido'] ?>"><br>
    <input type="email" name="email" value="<?= $persona['email'] ?>"><br>
    <input type="text" name="telefono" value="<?= $persona['telefono'] ?>"><br>
    <input type="date" name="fecha_nacimiento" value="<?= $persona['fecha_nacimiento'] ?>"><br>
    <button type="submit">Actualizar</button>
</form>
