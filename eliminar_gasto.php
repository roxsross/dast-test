<?php

include 'conexiondb.php';

$id_gasto = $_POST['eliminar_id'];

$conexion = conexion_db();

$conexion->query("DELETE FROM gastos WHERE id = $id_gasto ");

header('Location: cuentas_a_pagar.php');

?>