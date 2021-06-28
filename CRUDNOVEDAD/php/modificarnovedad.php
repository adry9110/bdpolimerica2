<?php
    require ('conexion.php'); 
    require ('novedad.php');
     
    $cod = $_REQUEST['cod'];
    $obs = $_REQUEST['obs'];
    $codigo = $_REQUEST['codigo'];
    
   
    
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $novedad = new novedad();
    $resultado = $novedad->modificarnovedad($cod, $obs,$codigo);

    if ($resultado)
    header ("location:Listadonovedad.php");
    else
    echo "error al modificar novedad";

?>