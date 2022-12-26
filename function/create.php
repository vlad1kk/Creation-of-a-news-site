<?php
require_once "../config/connect.php";
$title = $_POST["title"];
$description = $_POST["description"];

mysqli_query($connect , "INSERT INTO `news` (`id`,`title`, `description`) VALUES (NULL, '$title', '$description')");

header('Location: ../user.php');
?>