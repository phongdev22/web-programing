<?php
$user;
$pwd;
if ($_POST) {
    $GLOBALS["user"] = $_POST['user'];
    $GLOBALS["pwd"] = $_POST['pwd'];
    if ($user == "admin" && $pwd == "1234") {
        include "/xampp/htdocs/web/src/view/index.php";
        die();
    } else {
        echo "111";
    }
}
