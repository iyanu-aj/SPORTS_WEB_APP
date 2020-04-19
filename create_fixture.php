<!--To create a fixture-->

<?php


require_once 'db.php';
require 'config.php';


if (isset($_POST['team_1']) && isset($_POST['team_2']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['location'])) {
    $sql1="INSERT INTO GAMES
         SET
         GAMES.team_1 =?,
         GAMES.team_2 =?,
         GAMES.Date =?,
         GAMES.Time=?,
         GAMES.location=?

 ";

    $stmt1=$link->prepare($sql1);
    $stmt1->bind_param('sssss',

        $_POST['team_1'],
        $_POST['team_2'],
        $_POST['date'],
        $_POST['time'],
        $_POST['location']



    );
    $stmt1->execute();

}

$link-> close();

header('location:a_create.php');


