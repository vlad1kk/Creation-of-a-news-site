<?php
    require_once "config/connect.php";
    $news_id = $_GET['id'];
    $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");
    $news = mysqli_fetch_assoc($news);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style(user).css">
    <title>Update news</title>
</head>
<body>
<a href="http://localhost:8888/ownsite/user.php">Main</a>

<hr>

<h2>Update news</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $news_id ?>">
        <p>Name</p>
        <input type="text" name="title" value="<?=$news['title'] ?>">
        <p>Description</p>
        <textarea name="description"> <?=$news['description'] ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>