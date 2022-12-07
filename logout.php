<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['level']);
header('Location: masuk.php');
session_destroy();
exit;
?>