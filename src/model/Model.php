<?php
require "C:/xampp/htdocs/web/lib/DbConnect.php";

class Model
{
    protected $db;
    protected $table;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function create($fields)
    {
        var_dump($fields);
        $sql_pairs = [];
        $attributes = [];
        foreach ($fields as $k => $v) {
            $sql_pairs[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_parts = implode(', ', $sql_pairs);

        $this->query("INSERT INTO {$this->table} SET $sql_parts", $attributes);
    }
    public function update($id, $fields)
    {
    }
    public function delete($id)
    {
    }
    public function search($id, $fields = null)
    {
    }
    public function query($statement, $attributes = null, $one = false)
    {
        // var_dump(get_class($this));
        // var_dump(str_replace('Model', 'Entity', get_class($this)));
        if ($attributes) {
            return $this->db->prepare(
                $statement,
                $attributes,
                $one,
                str_replace('Model', 'Entity', get_class($this))
            );
        } else {
            return $this->db->query(
                $statement,
                $one,
                str_replace('Model', 'Entity', get_class($this))
            );
        }
    }
}
