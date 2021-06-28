<?php
$cod = $_REQUEST['cod'];
$codigo = $_REQUEST['codigo'];
$lote = $_REQUEST['lote'];
$fecha = $_REQUEST['fecha'];
$ciclo = $_REQUEST['ciclo'];
$peso = $_REQUEST['peso'];
$horan = $_REQUEST['horan'];
$horaf = $_REQUEST['horaf'];
$codpro = $_REQUEST['codpro'];
$unidad = $_REQUEST['unidad'];
$unid = $_REQUEST['unid'];

require_once('../modelo/conectar.php');
include('../modelo/Mproduccion.php');
$produccion = new produccionModelo();

$resultado = $produccion->modificar_produccion ($cod, $codigo, $lote, $fecha, $ciclo, $peso, $horan, $horaf, $codpro, $unidad, $unid);
//var_dump($matrizproveedor);
 

include("Cproduccion.php");

?>