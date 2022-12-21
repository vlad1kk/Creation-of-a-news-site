<?php
    $connect = mysqli_connect("localhost", "root", "root", "OwnSite");
        if (!$connect) {
            die("Помилка підключення до БД");
        }
?>