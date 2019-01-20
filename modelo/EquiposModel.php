<?php
require_once '../includes/functions.php';
class EquiposModel {

    private $id; 
    private $codigo_sap;
    private $tag;
    private $ubicacion;
    private $descripcion;
    private $protocolo;
    private $zona_proceso;
    private $variable_proceso;
    private $tipo_equipo;
    private $db;
    
    public function __construct () {
        $this->db = Database::connect();
    }
   

    /**
     * Get the value of codigo_sap
     */ 
    public function getCodigo_sap()
    {
        return $this->codigo_sap;
    }

    /**
     * Set the value of codigo_sap
     *
     * @return  self
     */ 
    public function setCodigo_sap($codigo_sap)
    {
        $this->codigo_sap = remove_junk($codigo_sap);

        return $this;
    }

    /**
     * Get the value of tag
     */ 
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set the value of tag
     *
     * @return  self
     */ 
    public function setTag($tag)
    {
        $this->tag = remove_junk($tag);

        return $this;
    }

    
 

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = remove_junk($descripcion);

        return $this;
    }

   

    /**
     * Get the value of zona_proceso
     */ 
    public function getZona_proceso()
    {
        return $this->zona_proceso;
    }

    /**
     * Set the value of zona_proceso
     *
     * @return  self
     */ 
    public function setZona_proceso($zona_proceso)
    {
        $this->zona_proceso = remove_junk($zona_proceso);

        return $this;
    }

    /**
     * Get the value of variable_proceso
     */ 
    public function getVariable_proceso()
    {
        return $this->variable_proceso;
    }

    /**
     * Set the value of variable_proceso
     *
     * @return  self
     */ 
    public function setVariable_proceso($variable_proceso)
    {
        $this->variable_proceso = remove_junk($variable_proceso);

        return $this;
    }

    /**
     * Get the value of tipo_equipo
     */ 
    public function getTipo_equipo()
    {
        return $this->tipo_equipo;
    }

    /**
     * Set the value of tipo_equipo
     *
     * @return  self
     */ 
    public function setTipo_equipo($tipo_equipo)
    {
        $this->tipo_equipo = remove_junk($tipo_equipo);

        return $this;
    }

    /**
     * Get the value of ubicacion
     */ 
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set the value of ubicacion
     *
     * @return  self
     */ 
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = remove_junk($ubicacion);

        return $this;
    }

    /**
     * Get the value of protocolo
     */ 
    public function getProtocolo()
    {
        return $this->protocolo;
    }

    /**
     * Set the value of protocolo
     *
     * @return  self
     */ 
    public function setProtocolo($protocolo)
    {
        $this->protocolo = $protocolo;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = remove_junk($id);

        return $this;
    }

    public function save () {
        $sql = "INSERT INTO Equipos (id,Codigo_Sap,Tag,Ubicacion,Protocolo,Descripcion,Zona_Proceso,Variable_de_Proceso,Tipo_Equipo) VALUES ('{$this->getId()}','{$this->getCodigo_sap()}','{$this->getTag()}','{$this->getUbicacion()}','{$this->getProtocolo()}','{$this->getDescripcion()}','{$this->getZona_proceso()}','{$this->getVariable_proceso()}','{$this->getTipo_equipo()}')";
        $save = $this->db->query($sql);
        
        $result = false;
        if ($save){
            $result = true;
        }
        return $result;
    }

    public function listarRegistros () {
        /*global $db;
        $sql = "SELECT * FROM Equipos";
        $result = $db->query($sql);
        $result_set = $db->while_loop($result);
        return $result_set; */

        $Equipos = $this->db->query("SELECT * FROM Equipos");
        return $Equipos;
    }

    public function eliminarEquipo () {
    $sql = "DELETE FROM Equipos WHERE id = '{$this->getId()}'";
    $delete = $this->db->query($sql);

    $result = false;
        if ($delete){
            $result = true;
        }
        return $result;
    }

    

    
}