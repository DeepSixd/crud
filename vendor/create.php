<?php

require_once '../cfg/connect.php';

$name = $_POST['name'];
$description = $_POST['description'];
$hours = $_POST['hours'];



mysqli_query($connect, "INSERT INTO `games` (`id`, `name`, `hours`, `description`) VALUES (NULL, '$name', '$hours' ,'$description')");

header('Location: /');

