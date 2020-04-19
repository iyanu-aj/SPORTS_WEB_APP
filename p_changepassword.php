<!--Player Password Reset-->

<?php
include 'profile.php';

//session_start();
  $email =$_SESSION['email'];
  $NEWPASS="";
    $oldpassword="";
   $oldpassword_err="";
   $password_err="";
  $confirm_password_err="";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
   require_once 'db.php';
   require_once 'config.php';


if (!empty($_POST['oldpassword'])){

    $oldpassword = trim( preg_replace("/\t|\R/",' ',$_POST['oldpassword']) );
    $query= " SELECT USERS.PASSWORD


              FROM USERS
              WHERE USERS.EMAIL = ?";
    $stmt1 = $link->prepare($query);
    $stmt1-> bind_param("s", $email);
    $email_check = $email;
    if($stmt1->execute()){
    $stmt1->store_result();
    $stmt1->bind_result($hashed_password);

      while($stmt1->fetch()==1){


        if(password_verify($oldpassword,$hashed_password)){
             $NEWPASS= trim( preg_replace("/\t|\R/",' ',$_POST['newpass']) );
             echo $NEWPASS;
               $sql = "UPDATE USERS SET USERS.PASSWORD =? WHERE USERS.EMAIL = '$email' ";

               $stmt=$link->prepare($sql);
               $NEWPASS=PASSWORD_HASH($NEWPASS,PASSWORD_DEFAULT);
               $stmt->bind_param('s', $NEWPASS);
               echo $NEWPASS;
               if($stmt->execute()){
                    header('location: profile.php');
               } else{
                   echo "Please try again later.";

               $stmt->close();

           }

        }
        else {
          $oldpassword_err="Old password incorrect";

        }



}

}

}else {
     $oldpassword_err = " Please input a password";
}


}
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Change Password</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>

  <body>

  <section>
      <div class="content-fixture" >
        <div class="row align-items-center">
          <div class="col">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h2>Reset Password </h2>
                <div class="form-group <?php echo (!empty($oldpassword_err)) ? 'has-error' : ''; ?>">
                              <label>Old Password:<sup>*</sup></label>
                            <br>  <input type="password" name="oldpassword" class="form-control"  placeholder="Old password" required>
                              <span class="help-block"><?php echo $oldpassword_err; ?></span>
                            </div>
              <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>New Password:<sup>*</sup></label> <br>
                <input type="password" name="newpass" class="form-control"  placeholder="New password" required>
                <span class="help-block"><?php echo $password_err; ?></span>
              </div>

              <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm New Password:<sup>*</sup></label>
                <br><input type="password" name="confirm_password" class="form-control"  placeholder="Confirm password" required>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
              </div>

              <div class="form-group">
                <input id="submit" type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
              </div>
                <a style="text-decoration: none" href="profile.php">Back to Profile Page</a>


            </form>


        </div>
      </div>
    </div>
</section>

  </html>
