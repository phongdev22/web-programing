<?php
include_once "C:/xampp/htdocs/web/src/service/UserService.php";

session_start();


$service = new UserService();
$data = [];
if ($_POST) {
    global $data;
    $data = [
        "userName" => $_POST['user'],
        "pwd" => $_POST['pass']
    ];
    $user = $service->getUser($data);
    if ($user && strcmp($user[0]->pwd, $data['pwd']) == 0) {
        $_SESSION['user'] = $data['userName'];
        $_SESSION['pass'] = $data['pwd'];

        header("location: /web/src/view/login.php");
    } else {
        header("location: /web/src/login.html?islogin=false");
    }
}
