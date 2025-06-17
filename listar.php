<?php
$conexion = new mysqli("localhost", "root", "", "proyecto_basico");

$personas = $conexion->query("SELECT * FROM personas");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Personas Registradas</h1>
    <a href="formulario.html">Nueva Persona</a>
    <table>
        <tr>
            <th>Nombre</th><th>Apellido</th><th>Email</th><th>Teléfono</th><th>Fecha Nac.</th><th>Acciones</th>
        </tr>
        <?php while($fila = $personas->fetch_assoc()): ?>
        <tr>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['apellido'] ?></td>
            <td><?= $fila['email'] ?></td>
            <td><?= $fila['telefono'] ?></td>
            <td><?= $fila['fecha_nacimiento'] ?></td>
            <td>
                <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a> |
                <a href="borrar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Seguro?')">Borrar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
