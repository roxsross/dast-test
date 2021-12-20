<?php

include 'conexiondb.php';

$id_servicio = $_POST['eliminar_id'];

$conexion = conexion_db();

$conexion->query("DELETE FROM servicios WHERE id = $id_servicio ");

header('Location: dashboard.php');



?>