<!--Players input Availability-->


<?php
include_once 'db.php';
require_once  'config.php';

$result = mysqli_query($link,"SELECT * FROM GAMES WHERE Game_ID='" . $_GET['Game_ID'] ."'");
$row= mysqli_fetch_array($result);

//Ignore Error messages

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if(isset($_POST['save']))
{
    $Game_ID = $_POST['Game_ID'];
    $Date = $_POST['Date'];
    $n_username = $_POST['Ausername'];
    $team_1 = $_POST['Team_1'];
    $team_2 = $_POST['Team_2'];
    $avail = $_POST['avail'];

    $sql = "INSERT INTO available (Game_ID,Date,Ausername,Team1,Team2,Availability)
	 VALUES ('$Game_ID','$Date','$n_username','$team_1','$team_2','$avail')";
    if (mysqli_query($link, $sql))
    {
        $message = "Availability Updated Successfully!";
    }
    else {
        $message = "Error! Try again";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Status</title>
    <?php include 'profile.php'; ?>

</head>

<body>
<div class="content-fixture">

<form method="post">
    <div style="color: darkred"><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div >
    <h3>Input Availability</h3>
        <div>
    Game ID: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Game_ID" value="<?php echo $row['Game_ID']; ?>"> <br>
        Username: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Ausername" value="<?= $username ?>"> <br>
    Date: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Date" value="<?php echo $row['Date']; ?>"> <br>
    Time: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Time" value="<?php echo $row['Time']; ?>"> <br>
    Team 1: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Team_1" value="<?php echo $row['Team_1']; ?>"> <br>
   Team 2: <input style="border: hidden; outline: none; background-color: transparent" type="text" name="Team_2" value="<?php echo $row['Team_2']; ?>">

        </div>

    </div>

    <p><b>Please select your availability:</b></p>
    <div style="font-size: 10px; color: darkred">Please do not click if you will not be available for the selected game</div>
    <br>

    <input type="radio" id="Available" name="avail" value="Available">
    <label for="Available">Available</label><br>
<br>
    <input type="submit" name="save" value="Submit" class="btnsel">
    <br>
    <a href= p_availablity.php style="text-decoration: none; font-size: 12px">Back to Fixtures</a>

</form>
</div>
</body>
</html>
