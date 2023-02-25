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

    function getUser($data)
    {
        $user = $this->repo->delete(1);
        return $user ?? "No user";
    }
}
