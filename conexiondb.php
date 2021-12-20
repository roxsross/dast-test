<?php

function conexion_db(){

//Base de datos local
$basededatos = "dashhtml";
$usuario = "root" ;
$contrasena = "";
$conexion = "localhost"; 


//Hostinger Mysql
/*
$basededatos = "u463129590_prueba_gb";
$usuario = "u463129590_gaston" ;
$contrasena = "Ns2b7bfqbf!";
$conexion = "sql234.main-hosting.eu";
*/

$cadena_conexion = new mysqli($conexion,$usuario,$contrasena,$basededatos);

return $cadena_conexion;

}



?>