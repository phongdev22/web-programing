<?php

class Database
{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo;
    /**
     * Summary of __construct
     * @param string $db_name
     * @param string $db_host
     * @param string $db_user
     * @param string $db_pass
     */
    public function __construct(
        $db_name,
        $db_host = 'localhost',
        $db_user = 'root',
        $db_pass = ''
    ) {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    private function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO(
                'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name,
                $this->db_user,
                $this->db_pass
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $pdo->query('
            //             SET NAMES utf8;
            //             SET CHARACTER SET UTF8
            //         ');
            $this->pdo = $pdo;
        }
        //echo "connect successfully<br>";
        return $this->pdo;
    }
    public function query_db($statement, $one = false, $class = null)
    {
        $rs = $this->getPDO()->query($statement);

        if (
            strpos(strtolower($statement), 'insert') === 0 ||
            strpos(strtolower($statement), 'delete') === 0 ||
            strpos(strtolower($statement), 'update') === 0

        ) {
            return $rs;
        }

        if ($class === null) {
            $rs->setFetchMode(PDO::FETCH_OBJ);
        }
        if ($one) {
            $data = $rs->fetch();
        } else {
            $data = $rs->fetchAll();
        }
        return $data;
    }
    /**
     * Summary of prepare_db
     * @param string $statement
     * @param array $attributes
     * @param mixed $one
     * @param mixed $class
     * 
     */
    public function prepare_db($statement, $attributes, $one = false, $class = null)
    {
        $rs = $this->getPDO()->prepare($statement);
        $count = $rs->execute($attributes);

        if (
            strpos(strtolower($statement), 'insert') === 0 ||
            strpos(strtolower($statement), 'delete') === 0 ||
            strpos(strtolower($statement), 'update') === 0

        ) {
            return $count;
        }

        if ($class === null) {
            $rs->setFetchMode(PDO::FETCH_OBJ);
        }

        if ($one) {
            $data = $rs->fetch();
        } else {
            $data = $rs->fetchAll();
        }

        return $data;
    }
}
