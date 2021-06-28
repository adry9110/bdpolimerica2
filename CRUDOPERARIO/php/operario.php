
<?php

Class operario {

    private $db;

    public function __construct()
    {        
        $this->db = Conectar::conexion();
        $this->operario = array();
    }

    public function listar_operario()
    {
        $consulta = $this->db->query("SELECT * FROM operario");
        while ($filas = $consulta->fetch_assoc()) {
            $this->operario[] = $filas;
        }
        $this->db->close();
        return $this->operario;
    }

    public function insertaroperario($cod, $nom,$ape,$tel,$dir,$correo,$tipo,$clave)
    {
        $sql = "INSERT INTO operario (cod_ope, nom_ope, ape_ope, telefono,direccion,correo,tipo_ope,ing_clave) VALUES ('$cod','$nom','$ape','$tel','$dir','$correo','$tipo','$clave')"; 
         //echo $sql;
        //exit(0);       
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function eliminaroperario($cod)
    {
        $sql = "DELETE FROM operario WHERE cod_ope = '$cod'"; 
         
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function modificaroperario($cod, $nom, $ape, $tel,$dir,$correo,$clave)
    {
        $sql = "UPDATE operario set  nom_ope = '$nom',ape_ope = '$ape',telefono = '$tel' , direccion = '$dir', correo = '$correo',  ing_clave = '$clave' WHERE cod_ope = '$cod'"; 
           
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

        public function operarioporcod($cod)
    {
        $consulta = $this->db->query("SELECT * FROM operario where cod_ope = '$cod'");
        $filas = $consulta->fetch_assoc();
        $this->operario[] = $filas;        
        $this->db->close();
        return $this->operario;

    }

    
}
?>