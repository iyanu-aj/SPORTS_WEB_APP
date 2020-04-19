<!--Update User status to Admin-->

<?php
session_start();

$username = $_POST['username'];
$type = trim( preg_replace("/\t|\R/",' ',$_POST['type']) );



if( ! empty($username))
{
    require_once('db.php');
    $link = mysqli_connect('localhost', 'root', '', 'accountsdb');

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }



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

        echo 'promote successfully';

        header('location: adminpage.php');

    }

    //    Change the type from database to P (Player)

    elseif ($type === "P") {
        $stmt->execute();

        echo 'promote successfully';
        header('location: adminpage.php');

        exit;
    }
    else {
        echo 'There is an error. Cannot promote user with '.$username."\n";
    }


}

?>
