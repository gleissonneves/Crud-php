<?php

namespace Database;

use PDO;
use PDOException;

class Connect
{

    /**
     * Undocumented function
     *
     * @return void
     */
    private function connectDb()
    {
        try {
            return new PDO(
                'mysql:host=' . HOST . '; dbname=' . BANCO . ';', USUARIO, SENHA
            );
        } catch (PDOException $exception) {
            throw new PDOException($exception->getMessage());
        }
    }


    /**
     * Undocumented function
     *
     * @return object|PDO
     */
    public function getConnect()
    {
        return $this->connectDb();
    }
}