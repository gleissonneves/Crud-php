<?php

namespace Crud\Database;

use Crud\Config\Mensage;

class Crud
{

    private $db;

    /**
     * Instancia Database
     *
     * @param $connection Receive connection with database
     */
    public function __construct($connection)
    {
        $this->db = $connection;
    }


    /**
     * Insert data from a table
     *
     * @param string $table
     * @param array $dataArr
     * @param bool $debuger
     * @return string
     */
    public function create(string $table, array $dataArr, bool $debuger = false)
    {
        $dataFields = implode(',', array_keys($dataArr));
        $fields     = "'" . implode("','", array_values($dataArr)) . "'";
        $sql        = "INSERT INTO {$table} ({$dataFields}) VALUES ({$fields})";
        
        if(!$debuger){
            $this->db->beginTransaction();
            $prepare = $this->db->prepare($sql);
            
            if ($prepare->execute()) {
                $this->db->commit();                
                return Mensage::MSG_CRIADO_SUCESSO;
            }else{
                return Mensage::MSG_ERRO_CRIAR;
                $this->db->rollBack();
            }
        }else{
            return $sql;
        }
    }

    /**
     * reading data from a table
     *
     * @param string $table
     * @param string $query
     * @param bool $debuger
     * @return string
     */
    public function read(string $table, string $query = NULL, bool $debuger = false)
    {
        $sql = "SELECT * FROM {$table} {$query}";
        
        if(!$debuger){
            $this->db->beginTransaction();
            $prepare = $this->db->prepare($sql);
            $prepare->execute();
            
            if ($prepare->rowCount() >= 1) {
                $this->db->commit();
                $records = $prepare->fetchAll($this->db::FETCH_ASSOC);
                
                if (is_array($records) && count($records) > 0) {
                    return $records;
                }
            }else{
                return Mensage::MSG_ERRO_SEM_RETORNO;
                $this->db->rollBack();
            }
        }else{
            return $sql;
        }
    }

    /**
     * update or increment data from a table
     *
     * @param string $table
     * @param array $dataArr
     * @param string $query
     * @param bool $debuger
     * @return string
     */
    public function update(string $table, array $dataArr, string $query = NULL, bool $debuger = false)
    {
        foreach ($dataArr as $keys => $values) {
            $fields[] = "$keys = '$values'";
        }

        $fields = implode(", ", $fields);
        $sql    = "UPDATE {$table} SET {$fields} WHERE {$query}";

        if(!$debuger){
            if ($table && $query) {
                $this->db->beginTransaction();
                $prepare = $this->db->prepare($sql);

                if ($prepare->execute()) {
                    $this->db->commit();                
                    return Mensage::MSG_ATUALIZADO_SUCESSO;
                }else{
                    return Mensage::MSG_ERRO_ATUALIZADO;
                    $this->db->rollBack();
                }
            }
        }else{
            return $sql;
        }
    }

    /**
     * Delete data from a table
     *
     * @param string $table
     * @param string $query
     * @param bool $debuger
     * @return string
     */
    public function delete(string $table, string $query = NULL, bool $debuger = false)
    {
        $sql = "DELETE FROM {$table} WHERE {$query}";

        if(!$debuger){
            if ($table && $query) {
                $this->db->beginTransaction();
                $prepare = $this->db->prepare($sql);
                $prepare->execute();

                if ($prepare->rowCount() > 0) {
                    $this->db->commit();
                    return Mensage::MSG_DELETADO_SUCESSO;
                }else{
                    return Mensage::MSG_ERRO_SEM_RETORNO;
                    $this->db->rollBack();
                }
            }
        }else{
            return $sql;
        }
    }

}
