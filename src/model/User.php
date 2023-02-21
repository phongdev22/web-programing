<?php
include "Model.php";
class User extends Model
{
    private $userID;
    private $userName;
    private $pwd;
    private $isActive;

    public function update($id, $fields)
    {
    }
    public function delete($id)
    {
    }
    public function search($id, $fields = null)
    {
    }

    public function __toString()
    {
        return "$this->userID | $this->userName | $this->isActive";
    }
}
