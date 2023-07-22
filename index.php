<?php

require_once 'cfg/connect.php';

// CRUD
// C - CREATE +
// R - READ +
// U - UPDATE +
// D - DELETE

?>




<!doctype html>
<html lang="en">
<HEAD>
    <meta charset="UTF-8">
    <title>Games</title>
</HEAD>
<style>
    th,td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Hours</th>
            <th>Description</th>
        </tr>

        <?php
            $games = mysqli_query($connect, "SELECT * FROM `games`" );
            $games = mysqli_fetch_all($games);
            foreach ($games as $game) {
                ?>
                <tr>
                    <td><?= $game[0] ?></td>
                    <td><?= $game[1] ?></td>
                    <td><?= $game[2] ?></td>
                    <td><?= $game[3] ?></td>
                    <td><a href="update.php?id=<?= $game[0] ?>">Update</a></td>
                    <td><a style="color: red" href="vendor/delete.php?id=<?= $game[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
    <h3>Add new game</h3>
    <form action="vendor/create.php" method="post">
        <p>Title</p>
        <input type="text" name="name">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Hours</p>
        <input type="number" name="hours"> <br> <br>
        <button type="submit">Add new game</button>
    </form>
</body>
</html>
