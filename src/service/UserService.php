<?php
require "C:/xampp/htdocs/web/src/model/User.php";
class UserService
{
    private $repo;
    /**
     * Summary of __construct
     */
    function __construct()
    {
        $this->repo = new User(new Database('web'));
        // print_r("Repository: ",);
        // print_r($this->repo);
    }
    /**
     * Summary of existUser
     * @param string $username
     * @param string $pwd
     * @return mixed
     */
    function existUser()
    {
        $sql = "select * from users";
        var_dump($this->repo->query($sql)[0]['userName']);
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
