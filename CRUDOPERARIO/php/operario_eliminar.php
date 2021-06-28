<?php
    require ('conexion.php'); 
    require ('operario.php');
     
    $cod = $_REQUEST['cod'];
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $operario = new operario();
    $resultado = $operario->eliminaroperario($cod);

    if ($resultado)
    header ("location:Listadooperario.php");
    else
    echo "error al eliminar operario";

?>