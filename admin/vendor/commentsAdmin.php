<?php
require_once "../OwnSite/config/connect.php";
$comments = $_POST["comments"];
$id = $_POST["id"];

mysqli_query($connect , "INSERT INTO `comments` (`id`, `news_id`, `comment`) VALUES (NULL, '$id', '$comments');");

header('Location: ../admin/comments.php?id=' . $id);
?>