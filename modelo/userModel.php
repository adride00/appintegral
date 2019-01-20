<?php
require_once '../includes/functions.php';
class Usuario {
    private $codigo;
    private $nombre;
    private $puesto;
    private $contraseña;
    private $email;
    private $user_level;
    private $last_login;
    private $imagen;
    private $db;

    public function __construct () {
        $this->db = Database::connect();
    }

    

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = remove_junk($codigo);

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = remove_junk($nombre);

        return $this;
    }

    /**
     * Get the value of puesto
     */ 
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set the value of puesto
     *
     * @return  self
     */ 
    public function setPuesto($puesto)
    {
        $this->puesto = remove_junk($puesto);

        return $this;
    }

    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = remove_junk($contraseña);

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = remove_junk($email);

        return $this;
    }

    /**
     * Get the value of user_level
     */ 
    public function getUser_level()
    {
        return $this->user_level;
    }

    /**
     * Set the value of user_level
     *
     * @return  self
     */ 
    public function setUser_level($user_level)
    {
        $this->user_level = remove_junk($user_level);

        return $this;
    }

    

   

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = remove_junk($imagen);

        return $this;
    }

    public function save () {
        
        $sql = "INSERT INTO Ejecutores (Codigo,Nombre,Puesto,Contraseña,email,user_level,imagen) VALUES('{$this->getCodigo()}', '{$this->getNombre()}', '{$this->getPuesto()}', '{$this->getContraseña()}', '{$this->getEmail()}', '{$this->getUser_level()}', '{$this->getImagen()}')";
                
        $save = $this->db->query($sql);
        
        $result = false;
        if ($save){
            $result = true;
        }
        return $result;
    }
}