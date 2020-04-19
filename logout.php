<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <?php include 'page.php'; ?>

</head>

<body>

<section class="presentation">
    <div class="introduction">
        <div class="intro-text">
            <div class="form">
             <center>   <h1>Hey!</h1>

                <p><?= 'You have been logged out!'; ?></p>

                 <br>

                 <hr>

                <a href="index.php"><button style="width:30%; border-radius: 10% " class="button">Home</button></a>

            </div>
            </center>
        </div>
    </div>
</section>


</body>
</html>
