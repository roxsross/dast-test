<?php

include 'conexiondb.php';

$conexion = conexion_db();

$detalle = $_POST['detalle'];
$cuotas = $_POST['cuotas'];
$importe = $_POST['importe'];
$mes = $_POST['mes'];
$pagado = $_POST['pagado'];

//Reemplazo el valor importe que viene con coma a punto para poder guardarlo en mysql
$var = $importe;
$number = (string)$var;
$format_number = str_replace(',', '.', $number);


$conexion->query("INSERT INTO gastos (`detalle`, `cuotas`,  `importe`, `mes`,`pagado`) VALUES ( '$detalle' , '$cuotas', '$format_number', '$mes', '$pagado')");

header('Location:cuentas_a_pagar.php');

?>