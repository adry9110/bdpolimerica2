<?php
require_once('../modelo/conectar.php');
require_once('../modelo/Mproduccion.php');
$produccion = new produccionModelo();// llamada al metodo constructor
$matrizproduccion = $produccion->get_produccion();
include('../vista/html/encabezado1.php');
include('../vista/html/listadoproduccion.php');
include('../vista/html/piepagina.php');

?>