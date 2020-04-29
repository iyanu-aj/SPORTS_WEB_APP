<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/styleteampage.css"/>

    <title></title>

</head>

<body>

<div class="header">
    <a href="profile.php">
        <img src="img/logoimg.png" height="150" width="160" id="logoimg" class="logo">
    </a>
</div>

<div class="sidebar">
    <br>
    <img src= "<?= $avatar?>" id="sidebardp">

    <h3 class="welcome">Welcome <?= $username?></h3>

    <hr>

    <a href="p_fixture.php">Fixtures</a>
    <a href="p_availablity.php">Availabilty</a>
    <a href="p_team_sheet.php">Team sheet</a>
    <a href="p_photoupload.php">Photo Upload</a>
    <a href="p_profile.php">Profile</a>
    <a href="logout.php">Log Out</a>


</div>

<main>


    <!--Background Design -->

    <img class="circle-1" src="./img/big-eclipse.svg" alt="" />
    <img class="circle-2" src="./img/mid-eclipse.svg" alt="" />
    <img class="circle-3" src="./img/small-eclipse.svg" alt="" />

</main>



<!-- Footer start-->

<footer>
    <div id="footer">
        <p id="footer-left">
            <a href="" >IA AJIDAHUN</a>
        <p id="footer-right">
            <a href="https://www3.rgu.ac.uk/about?" id="about">About</a>
            <span>©2020 <a href="http://www.rgu.ac.uk/">Robert Gordon University Aberdeen</a></span>
        </p>
    </div>
</footer>

<!--Footer Ends-->

</body>
</html>