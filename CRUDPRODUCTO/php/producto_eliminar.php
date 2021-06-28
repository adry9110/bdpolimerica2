<?php
    require ('conexion.php'); 
    require ('producto.php');
     
    $cod = $_REQUEST['cod'];
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $producto = new producto();
    $resultado = $producto->eliminarproducto($cod);

    if ($resultado)
    header ("location:Listadoproducto.php");
    else
    echo "error al eliminar producto";

?>