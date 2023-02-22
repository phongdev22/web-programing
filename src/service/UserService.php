<?php
require "C:/xampp/htdocs/web/src/model/User.php";
class UserService
{
    private $repo;

    function __construct()
    {
        $this->repo = new User(new Database('web'));
    }

    function getUser()
    {
        return;
    }
}
