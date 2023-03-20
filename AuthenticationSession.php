<?php
session_start([
    'cookie_lifetime' => 300,
]);
$_SESSION['login'] = true;
$_SESSION['login'] = false;
if (isset($_POST['name']) && isset($_POST['password'])) {
    if ('admin' == $_POST['name'] && 'mango' == $_POST['password']) {
        $_SESSION['login'] = true;
    } else {
        $_SESSION['login'] = false;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['login'] = false;
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60">
                <h2>Simple Auth example</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-60">
            <?php
            if (true == $_SESSION['login']) {
                echo "Hello Admin, Welcome!";
            } else {
                echo "Hello Stranger, Login First";
            }
            ?>
        </div>
    </div>
    <?php
    if (false == $_SESSION['login']) :
    ?>
        <form method="POST">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    <?php
    else :
    ?>
        <form action="auth.php" method="POST">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    <?php
    endif;
    ?>
</body>

</html>