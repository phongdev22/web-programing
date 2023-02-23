<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
      <script
         src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
         type="text/javascript"
      ></script> -->
    <link rel="stylesheet" href="../src/assets/styles/style.css" />
</head>

<body>
    <div class="wrapper">
        <form id="login-form" action="./view/login.php" method="POST">
            <h1 id="login-heading">Login</h1>
            <div class="form-group">
                <label for="user" class="login-label text">User name</label>
                <input type="text" id="user" class="login-input" name="user" value="<?php echo $_POST['user'] ?>" />
            </div>
            <div class="form-group">
                <label for="password" class="login-label text">Password</label>
                <input type="password" id="password" class="login-input" name="pwd" value="<?php echo $_POST['pwd'] ?>" />
            </div>
            <div class=" form-group">
                <a href="forgetp.php" class="forgot-password text">Forgot password!</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn login-submit text">Let go!</button>
            </div>
            <div class="form-group">
                <span class="has-account">Do you have account?</span>
                <a class="sign-up text" href="signup.php"> Sign up</a>
            </div>
        </form>
    </div>
</body>

</html>