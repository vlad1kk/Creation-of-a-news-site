<?php
    require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $name = strip_tags(trim($_POST['name']));
    $password = strip_tags(trim($_POST['password']));

    if(mb_strlen($login) < 3 || mb_strlen($login) > 90) {
        echo '<p style="font-weight: bold;height: 100vh; font-size: 30px;display: flex;align-items: center;justify-content: center; color: red; ">Invalid login length</a></p>';
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo '<p style="font-weight: bold;height: 100vh; font-size: 30px;display: flex;align-items: center;justify-content: center; color: red; ">Invalid name length</a></p>';
        exit();
    } else if(mb_strlen($password) < 2 || mb_strlen($password) > 10) {
        echo '<p style="font-weight: bold;height: 100vh; font-size: 30px;display: flex;align-items: center;justify-content: center; color: red; ">Invalid password length (from 2 to 10 characters)</a></p>';
        exit();
    }

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `name`, `password`) VALUES (NULL, '$login', '$name', '$password')");

    header('Location: ../index.php');
?>