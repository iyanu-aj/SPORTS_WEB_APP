<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_inAdmin'] != 1 ) {
    $_SESSION = array();
    session_destroy();
    $_SESSION['message'] = "You must log in before you can view profile page!";
    header("location: error.php");
    exit;
}


if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header("location: index.php");
    exit;
}

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: index.php");
    exit;
}
else {

    // For easy reading
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $avatar = $_SESSION['avatar'];
    $active = $_SESSION['active'];


}

    require_once 'db.php';
     $link = mysqli_connect('localhost', 'root', '', 'accountsdb');

      // Check connection
     if($link === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }
     $type = $type_err ="";

//     PHP mysqli stmt_init() Function to select from table in database


      $sql = "
      SELECT USERNAME, EMAIL
      FROM USERS
      GROUP BY EMAIL
          ORDER BY EMAIL
      ";
// Create a prepared statement

$stmt = $link->prepare($sql);
// Execute query

      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result(
        $username,
        $email
      );


$sql2 = "
      SELECT ID, USERNAME
      FROM USERS
      GROUP BY ID, USERNAME
          ORDER BY USERNAME
      ";
$stmt2 = $link->prepare($sql2);
// Execute query
$stmt2->execute();
$stmt2->store_result();

// Bind result variables

$stmt2->bind_result(
    $id,
    $username
);


?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Welcome <?= $username ?></title>
    <?php include 'admin.php'; ?>
    <title></title>

</head>

<body>





</body>
</html>
