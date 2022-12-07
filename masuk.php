<?php

require_once 'functions.php';
session_start();

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['submit'])) {
    if (is_null(login($_POST))) {
        echo "<script>
            alert('Username not registered!');
        </script>";
    } else if (!login($_POST)) {
        echo "<script>
            alert('Wrong username / password!');
        </script>";
    } else {
        $userData = getUserData($_POST['username']);
        $_SESSION['level'] = $userData['level'];
        $_SESSION['name'] = $userData['username'];
        $_SESSION['id'] = $userData['id'];
        // $_SESSION['photo'] = $userData['image'];
        $_SESSION['login'] = true;
        header('Location: index.php');
        // if ($userLevel == 'admin') {
        //     header('Location: admin.php');
        // }

        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paint Art</title>
    <link rel="shortcut icon" href="" type="image/icon-x">
    <link rel="stylesheet" href="stylee.css">
</head>

<body  class="uy">
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1>MASUK</h1>
                <hr>
                <label for="">Username</label>
                <input type="text" name="username">
                <label for="">Password</label>
                <input type="password" name="password">
                <button type="submit" name="submit">Masuk</button>
                <p>
                    Belum punya akun? <a href="daftar.php">DAFTAR</a>
                </p>
                <p>
                    Atau masuk menjadi <a href="index.php">GUEST</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="images/masuk.png" alt="">
        </div>
    </div>
</body>

</html>