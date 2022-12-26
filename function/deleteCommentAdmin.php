<?php
require_once "../config/connect.php";
$id = $_GET["id"];

mysqli_query($connect , "DELETE FROM `comments` WHERE `comments`.`id` = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style(user).css">
    <title>Deleting comment</title>
</head>

<body>
    <a href="http://localhost:8888/ownsite/admin.php">Main</a>

    <hr>
    <span class="delCom">Comment deleted successfully</span>
    


</body>

</html>