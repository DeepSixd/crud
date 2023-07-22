<?php
require_once '../cfg/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$hours = $_POST['hours'];

mysqli_query($connect, "UPDATE `games` SET `name` = '$name', `hours` = '$hours', `description` = '$description' WHERE `games`.`id` ='$id'");

header('Location: /');