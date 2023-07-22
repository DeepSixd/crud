<?php

require_once 'cfg/connect.php';
$game_id = $_GET['id'];
$game = mysqli_query($connect, "SELECT * FROM `games` WHERE `id` = '$game_id'");
$game = mysqli_fetch_assoc($game);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update gamelist</title>
</head>
<body>
<h3>Update gamelist</h3>
<form action="vendor/update.php" method="post">
    <input type ="hidden" name="id" value="<?= $game['id'] ?>"> <!-- уточнить, как это работает-->
    <p>Title</p>
    <input type="text" name="name" value="<?= $game['name'] ?>">
    <p>Description</p>
    <textarea name="description"><?= $game['description'] ?></textarea>
    <p>Hours</p>
    <input type="number" name="hours" value="<?= $game['hours'] ?>"> <br> <br>
    <button type="submit">Update game</button>
</form>
</body>
</html>