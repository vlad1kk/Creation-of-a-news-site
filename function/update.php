<?php
require_once "../config/connect.php";
$title = $_POST["title"];
$description = $_POST["description"];
$id = $_POST["id"];

mysqli_query($connect , "UPDATE `news` SET `title` = '$title', `description` = '$description' WHERE `news`.`id` = $id");

header('Location: ../user.php');
?>