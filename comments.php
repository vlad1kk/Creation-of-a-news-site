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
    <form action="function/comments.php" method="post">
        <input type="hidden" name="id" value="<?= $news_id ?>">
        <textarea name="comments" placeholder="Comment"></textarea>
        <button type="submit">Send</button>
    </form>

    <hr>
    <h3 style="text-align:center">Comments:</h3>

    <table>
        <tr>
            <th>Comment &#9997;</th>
            <th>Update &#128260;</th>
            <th>Delete &#10060;</th>
        </tr>
        <?php
    foreach ($com as $cmt) {
        ?>
            <tr>
                <td><?= $cmt[2] ?></td>
                <td><a href="updateComment.php?id=<?= $cmt[0] ?>">Update</a></td>
                <td><a style="color: red;" href="function/deleteComment.php?id=<?= $cmt[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>