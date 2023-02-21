<?php

$email;
$pwd;
$title;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    global $email;
    $email = $_POST["email"];
    global $pwd;
    $email = $_POST["pwd"];
    global $title;
    $title = "Login";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container col-3 mt-5">
        <form action="" method="POST">
            <div class=" form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $email ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" class="form-control" value="<?php echo $pwd ?>" />
            </div>
            <button type="submit" class="btn btn-primary btn-block col-4">Sign in</button>
        </form>
    </div>
</body>

</html>