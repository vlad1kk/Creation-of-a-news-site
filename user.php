<?php
require_once "config/connect.php";
$news = mysqli_query($connect, "SELECT * FROM `news`");
$news = mysqli_fetch_all($news);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style(user).css">
    <title>GSG</title>
</head>

<body>
<a href="http://localhost:8888/ownsite">Sign out</a>

<hr>
    <h2>Add news</h2>
    <form action="vendor/create.php" method="post">
        <p>Name</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <button type="submit">Add</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>&#129488;</th>
            <th>&#128260;</th>
            <th>&#10060;</th>
        </tr>
        <?php
        foreach ($news as $item) {
        ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><a href="comments.php?id=<?= $item[0] ?>">View</a></td>
                <td><a href="update.php?id=<?= $item[0] ?>">Update</a></td>
                <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>