<!--Player Profile-->

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <?php include 'profile.php'; ?>
</head>


<?php
//session_start();
include("db.php");
if(isset($_POST['Submit']))
{
    $oldpass=md5($_POST['opwd']);
    $useremail=$_SESSION['email'];
    $newpassword=md5($_POST['npwd']);
    $sql=mysqli_query($mysqli,"SELECT password FROM users where password='$oldpass' && email='$useremail'");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
        $mysqli=mysqli_query($mysqli,"update users set password='$newpassword' where email='$useremail'");
        $_SESSION['msg1']="Password Changed Successfully !!";
    }
    else
    {
        $_SESSION['msg1']="Old Password not match !!";
    }
}
?>


<body>

<div class="content-fixture">
    <h2>Profile Details</h2>
    <hr>
    <p><b>Username:</b></p>
    <p class=""> <?=  $username ?></p>


    <p><b>Email Address:</b></p>
    <p class=""> <?=  $email ?></p>
    <br>

    <a href="p_changepassword.php" ><button class="btnsel" ><b>Change Password</b></button>
    </a>



    <?php
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);
    ?>

</div>



</body>
</html>
