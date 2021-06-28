<?php
$cod = $_REQUEST['cod'];

require_once('../modelo/conectar.php');
include('../modelo/Mproduccion.php');
$produccion = new produccionModelo(); // llamada al metodo constructor

$resultado = $produccion->eliminar_produccion($cod);  
include("Cproduccion.php") ;

?>