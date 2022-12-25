<?php
require_once "config/connect.php";
$users = mysqli_query($connect, "SELECT * FROM `users`");
$users = mysqli_fetch_all($users);

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
    <title>Admin panel</title>
</head>

<body>
<a href="http://localhost:8888/ownsite">Sign out</a>
<hr>
<div style="display: flex;" class="container">
    <table>
        <tr>
            <th style="background-color: purple;">ID</th>
            <th style="background-color: purple;">Login</th>
            <th style="background-color: purple;">Name</th>
            <th style="background-color: purple;">Update</th>
            <th style="background-color: purple;">Delete</th>
        </tr>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user[0] ?></td>
                <td><?= $user[1] ?></td>
                <td><?= $user[3] ?></td>
                <td><a style="color: #3f75c5;" href="UpdateUser.php?id=<?= $user[0] ?>">Update</a></td>
                <td><a style="color: red;" href="vendor/deleteUser.php?id=<?= $user[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>



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
                <td><a href="admin/comments.php?id=<?= $item[0] ?>">View</a></td>
                <td><a href="updateNewsAdmin.php?id=<?= $item[0] ?>">Update</a></td>
                <td><a href="vendor/deleteNewsAdmin.php?id=<?= $item[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>

</body>

</html>