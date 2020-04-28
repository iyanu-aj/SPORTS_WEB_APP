<?php

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <?php include 'adminpage.php'; ?>

</head>

<body>

<div class="content-fixture">
    <h2>Profile Details</h2>
   <hr>

<br>
    <p><b>Username:</b></p>
    <p> <?=  $username ?></p>

    <p><b>Email Address:</b></p>
    <p> <?=  $email ?></p>

    <hr>

    <a href="a_changepassword.php" ><button class="btnsel" ><b>Change Password</b></button>
    </a>

</div>



</body>
</html>
