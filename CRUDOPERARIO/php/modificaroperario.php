<?php
    require ('conexion.php'); 
    require ('operario.php');
     
    $cod = $_REQUEST['cod'];
    $nom = $_REQUEST['nom'];
    $ape = $_REQUEST['ape'];
    $tel = $_REQUEST['tel'];
    $dir = $_REQUEST['dir'];
    $correo = $_REQUEST['correo'];
    $clave = $_REQUEST['clave'];
   
    
    // borrar el producto con el codigo que seleccionamos en la pàgina anterior
    $operario = new operario();
    $resultado = $operario->modificaroperario($cod, $nom,$ape,$tel,$dir,$correo,$clave);

    if ($resultado)
    header ("location:Listadooperario.php");
    else
    echo "error al modificar operario";

?>