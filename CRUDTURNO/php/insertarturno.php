<?php
require "conexion.php";
require "turno.php";
$turno = new turno();
$cod = $_REQUEST['cod'];
$codigo = $_REQUEST['codigo'];
$fec = $_REQUEST['fec'];
$jor = $_REQUEST['jor'];



$resultado = $turno->insertarturno($cod,$codigo,$fec,$jor);
try{
if ($resultado)
  header ("location:Listadoturno.php");
else{
  echo "error";
}  
}
        catch(Exception $e){
            die("error" . $e->getMessage());
            echo "Error en la línea: " . $e->getLine();            
}

?>