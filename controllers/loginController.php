<?php
session_start();

if(isset($_POST['email']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "a@a.com" && $password == "123")
    {
        $_SESSION['email'] = "a@a.com";
        header('location: ../index.php');
    }
    else
    {
        header('location: ../login.php'); // redirect
    }
}
else
{
    header('location: ../login.php');
}