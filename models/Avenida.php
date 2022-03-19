<?php


namespace Models;


class Avenida
{
    protected $id;
    protected $nombre;
    protected $estado;
    protected $localidad;

    public function __construct($nombre, $estado, $localidad)
    {
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->localidad = $localidad;
    }

    /**
     * @return string
     */
    public function getLocalidad(): string
    {
        return $this->localidad;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function find(Connection $connection, int $id)
    {

    }
}