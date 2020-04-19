<?php
include_once 'db.php';
require_once  'config.php';

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

$result = mysqli_query($link,"SELECT * FROM AVAILABLE WHERE Game_ID='" . $_GET['Game_ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Scores</title>
    <?php include 'adminpage.php'; ?>


    <!--Table styling-->
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #ceced6;
        text-align: left;
        padding: 8px;

    }

    tr:nth-child(even) {
        background-color: white;
    }

</style>

</head>
<body>

<div class="content-fixture">

<form class="" name="" method="post" action="">

    <div class="" style="padding-bottom:5px; ">
        <h3>Update Scores</h3>
        <div>
            Game ID: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Game_ID" value="<?php echo $row['Game_ID']; ?>"> <br>
            Date: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Date" value="<?php echo $row['Date']; ?>"> <br>
            Team 1: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Team_1" value="<?php echo $row['Team1']; ?>"> <br>
            Team 2: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Team_2" value="<?php echo $row['Team2']; ?>">
 <br>
           <?php

            if (mysqli_num_rows($result) > 0) {
            ?>
                <br>
            <table class="tab-fix" style="border-collapse: collapse"; width="100%">

                <tr style='background: #2d200f; color: #fbfbfb'>
                    <td>Username</td>
                    <td>Status</td>
                    <td>Team 1</td>
                    <td>Vs</td>
                    <td>Team 2</td>

                </tr>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["Ausername"]; ?></td>
                        <td><?php echo $row["Availability"]; ?></td>
                        <td><?php echo $row["Team1"]; ?></td>
                        <td>vs</td>
                        <td><?php echo $row["Team2"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </table>
            <?php
}
else{
    echo "No result found";
}
?>

        </div>
    </div>



</form>
</div>
</body>
</html>