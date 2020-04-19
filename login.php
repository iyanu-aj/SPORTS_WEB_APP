<?php


/* User login process, checks if user exists and password is correct */
// Escape email to protect against SQL injections

$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email does not exist!";

    header("location: error.php");
}
else { // If User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['type'] == $user['type'];

    //        Redirect to Admin if type is A(Admin)
        if ($user['type'] == "A"){


        // This is how we'll know the user is logged in
        $_SESSION['logged_inAdmin'] = true;

        header("location: adminpage.php");
        }


        //        Redirect to Player if type is P(Player)

        elseif ($user['type'] == "P"){
            $_SESSION['logged_inPlayer'] = true;
            header('location: profile.php' );

        }

    }

//    Go to Error page if password is wrong

    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

