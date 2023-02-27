<?php
require "C:/xampp/htdocs/web/lib/DbConnect.php";

class Model
{
    protected $db;
    protected $table;
    /**
     * 
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function insert($fields)
    {
        $sql_pairs = [];
        $attributes = [];
        foreach ($fields as $k => $v) {
            array_push($sql_pairs, "$k = ?");
            array_push($attributes, $v);
        }
        $sql_parts = implode(', ', $sql_pairs);

        $this->query("INSERT INTO {$this->table} SET $sql_parts", $attributes);
    }
    /**
     * Summary of update
     * @param mixed $id
     * @param mixed $fields
     * @return void
     */
    public function update($fields)
    {
        $sql_pairs = [];
        $attributes = [];

        // array_push($sql_pairs, "id= ?");
        // array_push($attributes, $id);

        foreach ($fields as $k => $v) {
            array_push($sql_pairs, "$k = ?");
            array_push($attributes, $v);
        }

        $sql_parts = implode(', ', $sql_pairs);
        $this->query("UPDATE {$this->table} SET $sql_parts", $attributes);
    }

    public function delete($userID)
    {
        return $this->search(["id" => $userID]);
    }
    public function search($fields = null)
    {
        $sql_pairs = [];
        $attributes = [];
        if ($fields) {
            foreach ($fields as $k => $v) {
                array_push($sql_pairs, "$k = ?");
                array_push($attributes, $v);
            }
        }
        $sql_parts = implode(' and ', $sql_pairs);
        return $this->query("SELECT * FROM {$this->table} WHERE $sql_parts", $attributes);
    }

    public function query($statement, $attributes = null, $one = false)
    {
        if ($attributes) {
            return $this->db->prepare_db(
                $statement,
                $attributes,
                $one,
            );
        } else {
            return $this->db->query_db(
                $statement,
                $one,
            );
        }
    }
}
