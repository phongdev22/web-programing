<?php
require "C:/xampp/htdocs/web/src/model/User.php";
class UserService
{
    private $repo;
    function __construct()
    {
        $this->repo = new User(new Database('web'));
    }

    function existUser($username, $pwd)
    {
        $sql = "select * from users where username = '?' and pwd = '?'";
        return $this->repo->query($sql, [$username, $pwd]);
    }

    function insertUser($userName, $pwd)
    {
    }

    function getUser($userName, $password)
    {
    }
    # admin 
    function getAllUser()
    {
    }

    function updateUser($userID, $pwd, $isActive)
    {
    }
}
