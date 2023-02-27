<?php
require "C:/xampp/htdocs/web/src/model/Model.php";
class UserService
{
    private $repo;

    function __construct()
    {
        $this->repo = new Model(new Database('web'));
        $this->repo->setTable("users");
    }


    function getAllUsers()
    {
        $this->repo->query("SELECT * FROM users");
    }

    function getUser($data)
    {
        $user = $this->repo->delete(1);
        return $user ?? "No user";
    }

    function createUser($data)
    {
        return $this->repo->insert($data);
    }

    function updateUser($data)
    {
        return $this->repo->update($data);
    }

    function deleteUser($userID)
    {
        return $this->repo->delete($userID);
    }
}
