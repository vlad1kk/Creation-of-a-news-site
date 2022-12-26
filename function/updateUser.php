<?php
require_once "../config/connect.php";
$login = $_POST["login"];
$name = $_POST["name"];
$id = $_POST["id"];

mysqli_query($connect , "UPDATE `users` SET `login` = '$login', `name` = '$name' WHERE `users`.`id` = $id");

header('Location: ../admin.php');
?>