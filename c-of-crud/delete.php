<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud03");

$query = "DELETE FROM `crud03`.`users` WHERE `users`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');