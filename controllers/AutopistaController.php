<?php

namespace Controllers;

require_once './models/Connection.php';
require_once './models/Autopista.php';

use Models\Autopista;
use Models\Connection;

class AutopistaController
{

    public static function getAutopistas()
    {
        $connection = new Connection();
        $autopistas = Autopista::all($connection);

        return json_encode($autopistas);
    }

    public static function getAutopista($id)
    {
        $connection = new Connection();
        $autopista = Autopista::find($connection, $id);

        return [
            'id'=>$id,
            'nombre'=>$autopista->getNombre(),
            'estado'=>$autopista->getEstado(),
            'peajes'=>$autopista->getPeajes(),
        ];
    }
}