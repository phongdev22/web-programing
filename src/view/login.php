<?php

include "C:/xampp/htdocs/web/src/index.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/styles/style.css" />
</head>

<body>
    <div class="wrapper">
        <form id="login-form" method="POST">
            <h1 id="login-heading">Login</h1>
            <div class="form-group">
                <label for="user" class="login-label text">User name</label>
                <input type="text" id="user" class="login-input" value="<?php echo $_SESSION['user'] ?>" name="user" />
            </div>
            <div class="form-group">
                <label for="password" class="login-label text">Password</label>
                <input type="password" id="password" class="login-input" value="<?php echo $_SESSION['pass'] ?>" name="pwd" />
            </div>
            <div class="form-group">
                <a href="../view/errorPage/errorPage.php" class="forgot-password text">Forgot password!</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn login-submit text">Let go!</button>
            </div>
            <div class="form-group">
                <span class="has-account">Do you have account?</span>
                <a class="sign-up text" href="../view/errorPage/errorPage.php"> Sign up</a>
            </div>
        </form>
    </div>
</body>

</html>