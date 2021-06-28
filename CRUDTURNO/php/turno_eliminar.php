<?php
    require ('conexion.php'); 
    require ('turno.php');
     
    $cod = $_REQUEST['cod'];
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $turno = new turno();
    $resultado = $turno->eliminarturno($cod);

    if ($resultado)
    header ("location:Listadoturno.php");
    else
    echo "error al eliminar turno";

?>