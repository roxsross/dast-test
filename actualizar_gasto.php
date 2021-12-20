<?php 

include 'conexiondb.php';

$conexion = conexion_db();

$id_gasto = $_POST['id_gasto'];
$detalle = $_POST['detalle'];
$cuotas = $_POST['cuotas'];
$importe = $_POST['importe'];
$mes = $_POST['mes'];
$pagado = $_POST['pagado'];

//Reemplazo el valor importe que viene con coma a punto para poder guardarlo en mysql
$var = $importe;
$number = (string)$var;
$format_number = str_replace(',', '.', $number);


$registros = $conexion->query("UPDATE gastos SET detalle = '$detalle' , cuotas = '$cuotas', importe = '$format_number', mes = '$mes' , pagado = '$pagado' WHERE id = '$id_gasto' ");


header('Location: cuentas_a_pagar.php');


?>