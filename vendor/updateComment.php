<?php
require_once "../config/connect.php";
$comment = $_POST["comment"];
$id = $_POST["id"];


mysqli_query($connect , "UPDATE `comments` SET `comment` = '$comment' WHERE `comments`.`id` = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style(user).css">
    <title>Update comment</title>
</head>

<body>
    <a href="http://localhost:8888/ownsite/user.php">Main</a>

    <hr>
    <span class="delCom">Comment Updated successfully</span>
    


</body>

</html>