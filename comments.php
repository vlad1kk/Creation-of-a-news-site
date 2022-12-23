<?php
require_once "config/connect.php";
$news_id = $_GET['id'];
$news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");
$news = mysqli_fetch_assoc($news);

$com = mysqli_query($connect, "SELECT * FROM `comments`");
$com = mysqli_fetch_all($com);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style(user).css">
    <title>View news</title>
</head>

<body>
    <a href="http://localhost:8888/ownsite/user.php">Main</a>

    <hr>

    <h3><?= $news['title'] ?></h3>
    <p><?= $news['description'] ?></p>

    <hr>

    <h3>Add a comment</h3>
    <form action="vendor/comments.php" method="post">
        <input type="hidden" name="id" value="<?= $news_id ?>">
        <textarea name="comments" placeholder="Comment"></textarea>
        <button type="submit">Send</button>
    </form>

    <hr>
    <h3>Comments:</h3>
    <?php
    foreach ($com as $cmt) {
    ?>
        <ul>
            <li><?= $cmt[2] ?></li>
        </ul>
    <?php
    }
    ?>
</body>

</html>