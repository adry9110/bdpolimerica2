
<?php

Class turno {

    private $db;

    public function __construct()
    {        
        $this->db = Conectar::conexion();
        $this->turno = array();
    }

    public function listar_turno()
    {
        $consulta = $this->db->query("SELECT * FROM turno");
        while ($filas = $consulta->fetch_assoc()) {
            $this->turno[] = $filas;
        }
        $this->db->close();
        return $this->turno;
    }

    public function insertarturno($cod, $codigo,$fec,$jor)
    {
        $sql = "INSERT INTO turno (cod_tur, cod_ope_tur, fecha, jornada) VALUES ('$cod','$codigo','$fec','$jor')"; 
        // echo $sql;
        //exit(0);       
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function eliminarturno($cod)
    {
        $sql = "DELETE FROM turno WHERE cod_tur = '$cod'"; 
         
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function modificarturno($cod, $codigo, $fec, $jor)
    {
        $sql = "UPDATE turno set cod_tur = '$cod',cod_ope_tur = '$codigo',fecha = '$fec' WHERE jornada = '$jor'"; 
           
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

        public function turnoeporcod($cod)
    {
        $consulta = $this->db->query("SELECT * FROM turno where cod_tur = '$cod'");
        $filas = $consulta->fetch_assoc();
        $this->turno[] = $filas;        
        $this->db->close();
        return $this->turno;

    }

    
}
?>