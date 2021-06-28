<?php
    require ('conexion.php'); 
    require ('turno.php');
     
    $cod = $_REQUEST['cod'];
    $codigo = $_REQUEST['codigo'];
    $fec = $_REQUEST['fec'];
    $jor= $_REQUEST['jor'];
   
    
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $turno = new turno();
    $resultado = $turno->modificarturno($cod, $codigo,$fec,$jor);

    if ($resultado)
    header ("location:Listadoturno.php");
    else
    echo "error al modificar turno";

?>