<?php
    require_once "config/connect.php";
    $comment_id = $_GET['id'];
    $comment = mysqli_query($connect, "SELECT * FROM `comments` WHERE `id` = '$comment_id'");
    $comment = mysqli_fetch_assoc($comment);
    echo "<pre>";
    print_r($comment);
    echo "</pre>"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style(user).css">
    <title>Update comment</title>
</head>
<body>
<a href="http://localhost:8888/ownsite/user.php">Main</a>

<hr>

<h2>Update comment</h2>
    <form action="vendor/updateComment.php" method="post">
        <input type="hidden" name="id" value="<?= $comment_id ?>">
        <p>Description</p>
        <textarea name="comment"> <?=$comment['comment'] ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>