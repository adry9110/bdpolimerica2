<?php
$cod = $_REQUEST['cod'];

require_once('../modelo/conectar.php');
include('../modelo/Mproduccion.php');
$produccion = new produccionModelo();
$matrizproduccion = $produccion->get_produccion1($cod);
//var_dump($matrizcurso);
//exit(0);
 
include("../vista/html/frmmodificarproduccion.php");

?>