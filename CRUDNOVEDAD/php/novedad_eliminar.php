<?php
    require ('conexion.php'); 
    require ('novedad.php');
     
    $cod = $_REQUEST['cod'];
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $novedad = new novedad();
    $resultado = $novedad->eliminarnovedad($cod);

    if ($resultado)
    header ("location:Listadonovedad.php");
    else
    echo "error al eliminar novedad";

?>