<?php
$conexion = new mysqli("localhost", "root", "", "proyecto_basico");
$id = $_GET['id'];
$conexion->query("DELETE FROM personas WHERE id=$id");
header("Location: listar.php");
