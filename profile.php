<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_inPlayer'] != 1 ) {
    $_SESSION['message'] = "Registered! You can login to view your profile page!";
    header("location: success.php");
}
else {
    // Makes it easier to read
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $avatar = $_SESSION['avatar'];
    $active = $_SESSION['active'];


}
?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Welcome <?= $username ?></title>
    <?php include 'profilepage.php'; ?>
</head>

<body>
<div>

</div>

</body>
</html>
