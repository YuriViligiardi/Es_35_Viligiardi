<?php
    session_start();

    $correctUser = "admin";
    $correctPassword = "1234";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (($username == $correctUser) && ($password == $correctPassword)) {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["date"] = date("Y-m-d h:i:s A");
        $_SESSION["login_time"] = time();
        header("Location: benvenuto.php");
    } else {
        header("Location: errore.php");
    }
?>