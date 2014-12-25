<?php
$firstName = $_GET['firstName'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query = "DELETE FROM `crud02`.`info` WHERE `info`.`firstName` = $firstName";

mysqli_query($link, $query);

header('location:list.php');


?>