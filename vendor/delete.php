<?php

require_once '../cfg/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM games WHERE `games`.`id` = '$id'");

header('Location: /');

