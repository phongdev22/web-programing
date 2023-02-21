<?php
include "Model.php";
class User extends Model
{
    private $userID;
    private $userName;
    private $pwd;
    private $isActive;
    public function __construct()
    {
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
}
