
<?php

Class novedad {

    private $db;

    public function __construct()
    {        
        $this->db = Conectar::conexion();
        $this->novedad = array();
    }

    public function listar_novedad()
    {
        $consulta = $this->db->query("SELECT * FROM novedad");
        while ($filas = $consulta->fetch_assoc()) {
            $this->novedad[] = $filas;
        }
        $this->db->close();
        return $this->novedad;
    }

    public function insertarnovedad($cod, $obs,$codigo)
    {
        $sql = "INSERT INTO novedad (cod_nove, observacion, cod_ope_nove) VALUES ('$cod','$obs','$codigo')"; 
         //echo $sql;
        //exit(0);       
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function eliminarnovedad($cod)
    {
        $sql = "DELETE FROM novedad WHERE cod_nove = '$cod'"; 
         
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function modificarnovedad($cod, $obs, $codigo)
    {
        $sql = "UPDATE novedad set observacion = '$obs',cod_ope_nove = '$codigo' WHERE cod_nove = '$cod'"; 
           
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

        public function novedadporcod($cod)
    {
        $consulta = $this->db->query("SELECT * FROM novedad where cod_nove = '$cod'");
        $filas = $consulta->fetch_assoc();
        $this->novedad[] = $filas;        
        $this->db->close();
        return $this->novedad;

    }

    
}
?>