<?php
require "conexion.php";
require "operario.php";
$operario = new operario();
$cod = $_REQUEST['cod'];
$nom = $_REQUEST['nom'];
$ape = $_REQUEST['ape'];
$tel = $_REQUEST['tel'];
$dir = $_REQUEST['dir'];
$correo = $_REQUEST['correo'];
$tipo = "operario";
$clave = $_REQUEST['clave'];



$resultado = $operario->insertaroperario($cod,$nom,$ape,$tel,$dir,$correo,$tipo,$clave);
try{

if ($resultado)
{
    

  header("location:Listadooperario.php");
}
 
}
        catch(Exception $e){
            die("error" . $e->getMessage());
            echo "Error en la línea: " . $e->getLine();            
}

?>