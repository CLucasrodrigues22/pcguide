<?php

namespace PCGUIDE\Model;

use App\Connection;

class Container
{

    public static function getModel($model)
    {

        try {
            // Retornar o modelo instanciado, já com a conexão estabelecida
            $class = "\\App\\Models\\" . ucfirst($model);

            $conn = Connection::getDb();
            return new $class($conn);
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}
