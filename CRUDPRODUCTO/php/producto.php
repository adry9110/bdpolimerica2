
<?php

Class producto {

    private $db;

    public function __construct()
    {        
        $this->db = Conectar::conexion();
        $this->producto = array();
    }

    public function listar_producto()
    {
        $consulta = $this->db->query("SELECT * FROM producto");
        while ($filas = $consulta->fetch_assoc()) {
            $this->producto[] = $filas;
        }
        $this->db->close();
        return $this->producto;
    }

    public function insertarproducto($cod, $tipo,$nombre)
    {
        $sql = "INSERT INTO producto (cod_produ, tipo_produ, nom_produ)VALUES ('$cod','$tipo','$nombre')"; 
        // echo $sql;
        //exit(0);       
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function eliminarproducto($cod)
    {
        $sql = "DELETE FROM producto WHERE cod_produ = '$cod'"; 
         
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function modificarproducto($cod, $tipo, $nombre)
    {
        $sql = "UPDATE producto set cod_produ = '$cod',tipo_produ = '$tipo',nom_produ = '$nombre' WHERE cod_produ = '$cod'"; 
           
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

        public function productoporcod($cod)
    {
        $consulta = $this->db->query("SELECT * FROM producto where cod_produ = '$cod'");
        $filas = $consulta->fetch_assoc();
        $this->producto[] = $filas;        
        $this->db->close();
        return $this->producto;

    }

    
}
?>