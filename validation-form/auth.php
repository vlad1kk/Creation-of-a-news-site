<?php
    require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $password = strip_tags(trim($_POST['password']));

    $password = md5($password);

    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($result);
     if(count($user) == 0){
        echo '<p style="font-weight: bold;height: 100vh; font-size: 30px;display: flex;align-items: center;justify-content: center; color: red; ">This user not found &#128532; <a style="color: green;" href="../index.php"> Back &#128072;</a></p>';
        exit();
    }

    header('Location: ../user.php');
    
?>
