<?php
    require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $password = strip_tags(trim($_POST['password']));

    $password = md5($password);

    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($result);
     if(count($user) == 0){
        echo "This user not found";
        exit();
    }

    header('Location: ../user.php');
    
?>