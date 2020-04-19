<!--Admin Update Team Scores by Selecting and Updating database-->

<?php
include_once 'db.php';
require_once  'config.php';


if(count($_POST)>0) {
    mysqli_query($link,"UPDATE GAMES set Game_ID='" . $_POST['Game_ID'] . "', Team_1='" . $_POST['Team_1'] . "', Score_1='" . $_POST['Score_1'] . "', Team_2='" . $_POST['Team_2'] . "' ,Score_2='" . $_POST['Score_2'] . "' WHERE Game_ID='" . $_POST['Game_ID'] . "'");
    $message = "Scores Updated Successfully!";
}
$result = mysqli_query($link,"SELECT * FROM GAMES WHERE Game_ID='" . $_GET['Game_ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Scores</title>
    <?php include 'adminpage.php'; ?>


</head>
<body>

<div class="content-fixture">

<form class="reg" name="" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div class="" style="padding-bottom:5px; ">
        <h3>Update Scores</h3>
    </div>
    Game_ID: <br>
    <input type="hidden" name="Game_ID" class="txtField" value="<?php echo $row['Game_ID']; ?>">
    <input type="text" name="Game_ID"  value="<?php echo $row['Game_ID']; ?>">
    <br>
    Team 1: <br>
    <input type="text" name="Team_1" class="txtField" value="<?php echo $row['Team_1']; ?>">
    <br>
    Score 1 :<br>
    <input type="text" name="Score_1" class="txtField" value="<?php echo $row['Score_1']; ?>">
    <br>
    Team_2:<br>
    <input type="text" name="Team_2" class="txtField" value="<?php echo $row['Team_2']; ?>">
    <br>
    Score_2:<br>
    <input type="text" name="Score_2" class="txtField" value="<?php echo $row['Score_2']; ?>">
    <br>
    <input type="submit" name="submit" value="Submit" class="btnsel">
    <br>
    <a href= schedule.php style="text-decoration: none; font-size: 12px">Back to Fixtures</a>

</form>
</div>
</body>
</html>