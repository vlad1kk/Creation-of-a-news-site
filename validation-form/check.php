<?php
    require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $name = strip_tags(trim($_POST['name']));
    $password = strip_tags(trim($_POST['password']));

    if(mb_strlen($login) < 3 || mb_strlen($login) > 90) {
        echo "Недопустима довжина логіна";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустима довжина імʼя";
        exit();
    } else if(mb_strlen($password) < 2 || mb_strlen($password) > 10) {
        echo "Недопустима довжина пароля(від 2 до 10 символів)";
        exit();
    }

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `name`, `password`) VALUES (NULL, '$login', '$name', '$password')");

    header('Location: ../index.php');
?>