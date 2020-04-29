<?php include 'adminpage.php';
require_once 'db.php';
require 'config.php';
?>
<!--CREATE A FIXTURE IN ADMIN PAGE-->
<?php
/* To create a fixture*/
if (isset($_POST['team_1']) && isset($_POST['team_2']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['location'])) {
    $sql1=
        "INSERT INTO games (Team_1, Team_2, Date, Time, Location) VALUES (?,?,?,?,?)

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
    $message = "Fixture created successfully!";

}

?>
    <!DOCTYPE html>
    <html >
    <head>
        <meta charset="UTF-8">
        <title>Create A Game</title>
        <link rel="stylesheet" href="css/create.css"/>
        <title>Create</title>

    </head>

    <body>

    <div class="content-fixture">
        <h3> Create a Game </h3>
            <div class="container_fix">

            <form action="" method="post">
                <p>Hi! <?=$username?>, you can create a game here:</p>
                <div><?php if(isset($message)) { echo $message; } ?>
                </div>

                <div>
                    <div>Input Teams</div>

                    <input type="text" name="team_1" class="form-control2" value="" placeholder="Team 1" required>
                    <input type="text" name="team_2" class="form-control2" value="" placeholder="Team 2" required>

                </div>
                <div>
                        <div>Date:</div>

                    <input type="date" name="date" class="form-control1" value="" placeholder="mm/dd/yyyy" required>
                </div>

                <div>

                        <div>Time:</div>

                    <input type="time" name="time" class="form-control1" value="" placeholder="" required>
                </div>

                <div>

                        <div>Location:</div>

                    <input type="text" name="location" class="form-control" value="" placeholder="Input location" required>
                </div>
                <div class="form-check">
                    <input type="submit" class="btnsel" value="Create">
                    <input type="reset" class="btnsel" value="Reset">
                </div>
            </form>



            </div>

    </div>





    </body>
    </html>
