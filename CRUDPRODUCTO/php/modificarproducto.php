<?php
    require ('conexion.php'); 
    require ('producto.php');
     
    $cod = $_REQUEST['cod'];
    $tipo = $_REQUEST['tipo'];
    $nombre = $_REQUEST['nombre'];
  
   
    
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $producto = new producto();
    $resultado = $producto->modificarproducto($cod, $tipo,$nombre);

    if ($resultado)
    header ("location:Listadoproducto.php");
    else
    echo "error al modificar producto";

?>