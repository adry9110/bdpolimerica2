<?php
require "conexion.php";
require "producto.php";
$producto = new producto();
$cod = $_REQUEST['cod'];
$tipo = $_REQUEST['tipo'];
$nombre = $_REQUEST['nombre'];




$resultado = $producto->insertarproducto($cod,$tipo,$nombre);
try{
if ($resultado)
{header ("location:Listadoproducto.php");

}
  
}
        catch(Exception $e){
            die("error" . $e->getMessage());
            echo "Error en la línea: " . $e->getLine();            
}

?>