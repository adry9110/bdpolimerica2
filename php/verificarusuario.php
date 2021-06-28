<?php
require_once ('conexion.php');
$clave = $_POST["password"];
$tipo = $_POST["tipo"];
$codigo = $_POST["user"];

$consulta = "SELECT * FROM operario WHERE cod_ope = '$codigo' AND 
ing_clave = '$clave' AND tipo_ope = '$tipo'";
//echo $consulta;
$resultado = $conexion->query($consulta);
$filas =$resultado->num_rows;
//echo " ".$filas;
//exit;
if($filas ==1){
    if($tipo=="operario"){
        header("location:../menuope.html");
        
    }
        if($tipo=="administrador"){
        header("location:../menuadm.html");
        
    }
    
}
else{
       header("location:../Login.html");
}



    



?>