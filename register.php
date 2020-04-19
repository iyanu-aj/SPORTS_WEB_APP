<?php
/* Registration process, inserts user info into the database
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];



// Escape all $_POST variables to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
$avatar_path = $mysqli->escape_string('images/'.$_FILES['avatar']['name']);






//two passwords are equal to each other

if ($_POST['password'] == $_POST['confirmpassword']) {

    $avatar_path = $mysqli->escape_string ('images/'.$_FILES['avatar']['name']);

    //make sure the file type is image
    if (preg_match("!image!",$_FILES['avatar']['type'])) {

        //copy images to image/ folder
        if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){

                //set session variables to display on home page

                // Check if user with that email exists
                $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

                // if the rows returned are more than 0 then user email exists
                if ( $result->num_rows > 0 ) {

                $_SESSION['message'] = 'User with this email already exists!';
                header("location: error.php");
                 }


            else { // Email doesn't already exist in a database, proceed...

                $_SESSION['username'] = $username;
                $_SESSION['avatar'] = $avatar_path;

                // active is 0 by DEFAULT (no need to include it here)
                $sql = "INSERT INTO users (username, email, password, hash, avatar) "
                    . "VALUES ('$username','$email','$password','$hash', '$avatar_path')";




                // Add user to the database
                if ($mysqli->query($sql)) {

                    $_SESSION['active'] = 0;
                    $_SESSION['logged_in'] = true; // So we know the user has logged in

                    header("location: profile.php");

                } else {
                    $_SESSION['message'] = 'Registration failed!';
                    header("location: error.php");
                }


            }
        }
        else {
            $_SESSION['message'] = 'File upload failed!';
            header("location: error.php");
        }
    }
    else {
        $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
    }

} else {
    $_SESSION['message'] = 'Two passwords do not match!';
    header("location: error.php");
}
