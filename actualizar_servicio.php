<?php 

include 'conexiondb.php';

$conexion = conexion_db();

$id_servicio = $_POST['id_servicio'];
$servicio = $_POST['servicio'];
$ven_1 = $_POST['ven_1'];
$ven_2 = $_POST['ven_2'];
$importe = $_POST['importe'];
$pagado = $_POST['pagado'];

//Reemplazo el valor importe que viene con coma a punto para poder guardarlo en mysql
$var = $importe;
$number = (string)$var;
$format_number = str_replace(',', '.', $number);


$registros = $conexion->query("UPDATE servicios SET servicio = '$servicio' , 1er_vto = '$ven_1', 2do_vto = '$ven_2', importe = '$format_number' , pagado = '$pagado' WHERE id = '$id_servicio' ");


header('Location: dashboard.php');


?>