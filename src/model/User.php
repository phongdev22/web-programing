<?php
include "Model.php";
class User extends Model
{
    private $userID;
    private $userName;
    private $pwd;
    private $isActive;

    public function __toString()
    {
        return "$this->userID | $this->userName | $this->isActive";
    }
}
