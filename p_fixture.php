<!--Check Player Fixture -->

<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Schedule</title>
    <?php include 'profile.php'; ?>


</head>


<?php
require_once('db.php');
// Connect to database
/* Attempt to connect to MySQL database */
require_once ('config.php');
?>
<body>

<div class="content-fixture">

    <?php

    $sql = "SELECT * FROM GAMES";

    if($result = mysqli_query($link, $sql)){
    ?>

    <a class="content-fixture" style="font-size: 11px; ">
        <h3><strong>Fixtures</strong></h3>

        <?php

        if(mysqli_num_rows($result) > 0){

            echo "<table class='tab-fix'>";
            echo "<tr style='font-size: 10px'>";
            echo "<th style='background: #ceced6; color: #31182b'>ID</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Time</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Date</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Team 1</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Score 1</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Score 2</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Team 2</th>";
            echo "<th style='background: #ceced6; color: #31182b'>Location</th>";
            ?>
            <?php


            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr style='background: white ;'>";
                echo "<td style='background: #ceced6; font-size: 13px'>" . $row['Game_ID'] . "</td>";
                echo "<td>" . $row['Time'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Team_1'] . "</td>";
                echo "<td>" . $row['Score_1'] . "</td>";
                echo "<td>" . $row['Score_2'] . "</td>";

                echo "<td>" . $row['Team_2'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                ?>
               <?php

                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);

        } else{
            echo "No records matching your query were found.";
        }

        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }


        // Close connection
        mysqli_close($link);
        ?>

</div>






</body>
</html>
