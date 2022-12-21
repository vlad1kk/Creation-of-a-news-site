<?php 
require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $password = strip_tags(trim($_POST['password']));

    $password = md5($password);

    $result = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($result);
    if($user['id'] != 1){
        echo '<p style="font-weight: bold;height: 100vh; font-size: 30px;display: flex;align-items: center;justify-content: center; color: red; ">Are you a hacker? <a style=" color: green;" href="../login.php"> No, sorry &#128591;</a></p>';
        exit();
    } 
    header('Location: ../admin.php');
    ?>