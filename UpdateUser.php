<?php
    require_once "config/connect.php";
    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");
    $user = mysqli_fetch_assoc($user);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style(user).css">
    <title>Update user</title>
</head>
<body>
<a href="http://localhost:8888/ownsite/admin.php">Main</a>

<hr>

<h2>Update user</h2>
    <form action="function/updateUser.php" method="post">
        <input type="hidden" name="id" value="<?= $user_id ?>">
        <p>login</p>
        <input type="text" name="login" value="<?=$user['login'] ?>">
        <p>Name</p>
        <textarea name="name"> <?=$user['name'] ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>