<?php
require_once 'functions.php';
session_start();
if(isset($_SESSION['login'])){
    header('Location: index.php');
    exit;
}

$alert = '';

if (isset($_POST['submit'])) {
    if ($_POST['password'] != $_POST['confirm']) {
        $alert = "Password confirm doesn't match!";
    } else {
        $result = register($_POST);
        if ($result) {
            echo "<script>
                alert('Registration Success!');
                document.location.href = 'masuk.php';
            </script>";
        } else {
            echo "<script>
                alert('Registration Failed!');
                document.location.href = 'daftar.php';
            </script>";
        }
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
    <link rel="stylesheet" href="stylee.css" type="">
    <link rel="shortcut icon" href="" type="image/icon-x">
</head>

<body>
    <div class="container2">
        <div class="login">
            <form action="  " method="post">
                <h1>DAFTAR</h1>
                <hr>
                <label for="">Username</label>
                <input type="text" name="username">
                <label for="">Alamat</label>
                <input type="text" name="alamat">
                <label for="">Password</label>
                <input type="password" name="password">
                <label for="">Confirm Password</label>
                <input type="password" name="confirm">
                <button type="submit" name="submit">Daftar</button>
                <p>
                    Sudah punya akun? <a href="masuk.php">MASUK</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="images/daftar.png" alt="">
        </div>
    </div>
</body>

</html>