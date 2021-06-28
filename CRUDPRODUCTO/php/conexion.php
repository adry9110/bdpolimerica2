<?php
require ('configuracion.php');
class Conectar{

    public static function conexion(){  
        try{
            //$conexion = new mysqli("localhost", "root", "", "bdalmacen");
            $conexion_db = new mysqli(SERVIDOR,USUARIO,CLAVE,DBNOMBRE);

        } catch(Exception $e){
            die("error" . $e->getMessage());
            echo "Error en la línea: " . $e->getLine();            
        }
        return $conexion_db;
    }
}
?>