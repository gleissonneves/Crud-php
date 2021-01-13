<?php

namespace Crud\Database;

use PDO;
use PDOException;
use Crud\Config\Env;

class Connect extends Env
{

    /**
     * Faz a conexão com o banco
     *
     * @return void
     */
    private function connectDb()
    {
        try {
            return new PDO(
                "".
                Env::$DB_CONNECTION.":host=".Env::$DB_HOST.";port=".Env::$DB_PORT.";dbname=".Env::$DB_DATABASE.",".Env::$DB_USERNAME.",".Env::$DB_PASSWORD
                .""
            );
        } catch (PDOException $exception) {
            throw new PDOException($exception->getMessage());
        }
    }


    /**
     * Faz com que a conexão seja pública
     *
     * @return object|PDO
     */
    public function getConnect()
    {
        return $this->connectDb();
    }
}