<?php
function login($email)
{
    $sql = "SELECT * FROM tai_khoan WHERE email = '$email'";
    $result = dataProgess($sql, false);
    return $result;
}
function register($email, $mat_khau)
{
    $sql = "INSERT INTO tai_khoan(email,mat_khau) VALUES('$email','$mat_khau')";
    dataProgess($sql);
}
function checkRegister($email)
{
    $sql = "SELECT email FROM tai_khoan WHERE email = '$email'";
    $result = dataProgess($sql, false);
    return $result;
}
