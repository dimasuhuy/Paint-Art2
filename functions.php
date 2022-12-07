<?php
require_once 'koneksi.php';

function register($data)
{
    global $koneksi_db;

    $username = $data['username'];
    $password = $data['password'];
    $alamat   = $data['alamat'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO tbl_user (username, password, alamat, level) VALUES (
        '$username', '$passwordHash', '$alamat', 'user')";

    return mysqli_query($koneksi_db, $query);
}  

function login($data)
{
    global $koneksi_db;

    $username = $data['username'];
    $password = $data['password'];

    $querySelect = "SELECT * FROM tbl_user WHERE username = '$username'";

    $rawSelectResult = mysqli_query($koneksi_db, $querySelect);
    $selectResult = mysqli_fetch_assoc($rawSelectResult);
    if (is_null($selectResult)) {
        return null;
    }

    $passwordHash = $selectResult['password'];

    if (password_verify($password, $passwordHash)) {
        return true;
    } else {
        return false;
    }
}
function getUserData($username = null, $id = null)
{
    global $koneksi_db;

    $query = is_null($username) ? "SELECT * FROM tbl_user WHERE id_user = $id" : "SELECT * FROM tbl_user WHERE username = '$username'";
    $rawResult = mysqli_query($koneksi_db, $query);
    $result = mysqli_fetch_assoc($rawResult);
    return $result;

    // $userLevel = ['level'];
}