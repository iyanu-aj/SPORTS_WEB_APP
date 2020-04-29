<?php include 'adminpage.php'; ?>

<!--Administrator promote page-->

<!--Update User status to Admin-->

<?php
session_start();

$username = $_POST['username'];
$type = trim( preg_replace("/\t|\R/",' ',$_POST['type']) );



if( ! empty($username))
{
    require_once('db.php');
    require_once ('config.php');



    $sql ="UPDATE USERS

         SET USERS.TYPE = ?

         WHERE

         USERS.USERNAME  = '$username'
          ";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('s', $type);
    $stmt->execute();

//    Change the type from database to A (Admin)

    if($type === "A"){
        $stmt->execute();
        $message = "Promoted to Admin Successfully!";
    }

    //    Change the type from database to P (Player)

    elseif ($type === "P") {
        $stmt->execute();
        $message = "Promoted to Player Successfully!";

    }
    else {
        echo 'There is an error. Cannot promote user with '.$username."\n";
    }


}

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Promote User</title>


</head>

<body>



<div class="content-fixture">
    <h2><b>Promote Users</b></h2>

    <form action="" method="post">
        <div><?php if(isset($message)) { echo $message; } ?>
        </div>
            <select class="optsel" name="username" required>
                <option value="" selected disabled hidden>Choose account</option>
                <?php

                $stmt->data_seek(0);
                while( $stmt->fetch() )
                {
                    echo "<option value='$username'>".$email."</option>\n";
                }

                $stmt->free_result();
                $link->close();
                ?>

            </select>
            <select class="optsel" name="type">
                <option value="" selected disabled hidden>New Position</option>
                <option value="A">Admin</option>
                <option value="P">Player</option>
            </select>
            <input type="submit" class="btnsel" value="Promote Now">
            <input type="reset" class="btnsel" value="Reset">
        </div>
    </form>

</div>

</body>
</html>

