<?php

class produccionModelo 
{
    protected $conexion_db; // almacenar conexión a la bd

    private $produccion; // almacenar los proveedor

    public function __construct()
    {
        
        $this->conexion_db = Conectar::conexion();
        $this->produccion = array();
    }

    public function get_produccion()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM produccion");
        while ($filas = $consulta->fetch_assoc()) {
            $this->produccion[] = $filas;
     
}
        $this->conexion_db->close();
        return $this->produccion;
        
        
    }
     public function get_produccion1($cod)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM produccion WHERE cod_prod = '$cod'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->produccion[] = $filas;
     
}
        $this->conexion_db->close();
        return $this->produccion;
        
        
    }
    
    public function insertar_produccion($cod, $codigo, $lote, $fecha, $ciclo, $peso, $horan, $horaf, $codpro, $unidad, $unid)
    {
        $resultado = $this->conexion_db->query("INSERT INTO 
        produccion (cod_prod, cod_ope_prod, lote, fecha, ciclo, peso, hora_ini, hora_fin, cod_produ_prod,unid_rechazada, unid_acept) VALUES 
        ('$cod', '$codigo', '$lote', '$fecha','$ciclo','$peso','$horan','$horaf','$codpro','$unidad','$unid')");

        $this->conexion_db->close();
        return $resultado;
}
     public function eliminar_produccion($cod)
    {
        $resultado = $this->conexion_db->query(" DELETE FROM produccion WHERE cod_prod = '$cod'");

        $this->conexion_db->close();
        return $resultado;
}
    public function Modificar_produccion($cod, $codigo, $lote, $fecha, $ciclo, $peso, $horan, $horaf, $codpro, $unidad, $unid){
        $resultado=$this->conexion_db->query("UPDATE produccion SET cod_prod = '$cod',cod_ope_prod ='$codigo', lote='$lote', fecha ='$fecha', ciclo = '$ciclo',peso = '$peso',hora_ini = '$horan', hora_fin ='$horaf', cod_produ_prod = '$codpro', unid_rechazada = '$unidad', unid_acept='$unid' WHERE cod_curs ='$cod'");
    $this->conexion_db->close();
    return $resultado;
    }

}


?>