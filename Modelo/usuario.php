<?php
class Usuario {

    /**
     * @var int
     */
    private $id;
    /**
     * @var String
     */
    private $usuario;
    /**
     * @var String
     */
    private $contrasena;

    /**
     * @var String
     */
    private $nombre_usuario;


    function __construct() {}

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param String $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return String
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * @param String $contrasena
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    /**
     * @return String
     */
    public function getNombreUsuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * @param String $nombre_usuario
     */
    public function setNombreUsuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;
    }



}

?>