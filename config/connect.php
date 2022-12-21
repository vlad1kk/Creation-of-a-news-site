<?php
    $connect = mysqli_connect("localhost", "root", "root", "OwnSite");
        if (!$connect) {
            die("Error connect to database");
        }
?>