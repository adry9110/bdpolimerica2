<?php
require "conexion.php";
require "novedad.php";
$novedad = new novedad();
$cod = $_REQUEST['cod'];
$obs = $_REQUEST['obs'];
$codigo = $_REQUEST['codigo'];




$resultado = $novedad->insertarnovedad($cod,$obs,$codigo);
try{
if ($resultado)
{ header ("location:Listadonovedad.php");

}
}
        catch(Exception $e){
            die("error" . $e->getMessage());
            echo "Error en la línea: " . $e->getLine();            
}

?>