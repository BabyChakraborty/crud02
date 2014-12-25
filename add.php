<?php
$firstName=$_POST['firstName'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query = "INSERT INTO `crud02`.`info` (

`firstName`)
VALUES (
'$firstName')";

mysqli_query($link, $query);
header('location:list.php');