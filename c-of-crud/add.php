<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud03");

$query = "INSERT INTO `crud03`.`users` (
`id` ,
`email` ,
`created`
)
VALUES (

       ' ".$_POST['id']."', '".$_POST['email']."', '".$_POST['created']."'

                                    );";

mysqli_query($link, $query);
header('location:list.php');