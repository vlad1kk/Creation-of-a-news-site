<?php
require_once "config/connect.php";
$users = mysqli_query($connect, "SELECT * FROM `users`");
$users = mysqli_fetch_all($users);
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
    <table>
        <tr>
            <th style="background-color: purple;">ID</th>
            <th style="background-color: purple;">Login</th>
            <th style="background-color: purple;">Password</th>
            <th style="background-color: purple;">Name</th>
            <th style="background-color: purple;">Delete</th>
        </tr>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user[0] ?></td>
                <td><?= $user[1] ?></td>
                <td><?= $user[2] ?></td>
                <td><?= $user[3] ?></td>
                <td><a style="color: red;" href="vendor/deleteUser.php?id=<?= $user[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>

    <!-- echo "<pre>";
    print_r($comment);
    echo "</pre>"; -->