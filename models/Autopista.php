<?php

namespace Models;

use Models\Connection;
use PDO;

class Autopista
{
    protected int $id;
    protected string $nombre;
    protected string $estado;
    protected int $peajes;

    public function __construct($nombre, $estado, $peajes)
    {
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->peajes = $peajes;
    }

    /**
     * @return string
     */
    public function getPeajes():string
    {
        return $this->peajes;
    }

    /**
     * @return string
     */
    public function getEstado():string
    {
        return $this->estado;
    }

    /**
     * @return string
     */
    public function getNombre():string
    {
        return $this->nombre;
    }

    /**
     * @return array
     */
    public static function all(Connection $connection): array
    {
        $conn = $connection->get_connection();
        $stmt = $conn->prepare("SELECT id, nombre, estado, peajes FROM autopistas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return Autopista
     */
    public static function find(Connection $connection, int $id): Autopista
    {
        $conn = $connection->get_connection();
        $stmt = $conn->prepare("SELECT id, nombre, estado, peajes FROM autopistas WHERE id=?");
        $stmt->execute(array($id));
        $res = $stmt->fetch();

        return new Autopista($res['nombre'], $res['estado'], $res['peajes']);
    }
}