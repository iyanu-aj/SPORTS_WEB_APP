<?php
/* Main page with two forms: sign up and log in */
require 'db.php';

/*Starting session*/
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
        rel="stylesheet"/>
            <link rel="stylesheet" href="css/stylereg.css"/>
    <link rel="stylesheet" href="css/style.css" />


    <title>Homepage</title>
</head>

<!--Requesting the login.php and the register.php upon click-->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')

//user log in
{
    if (isset($_POST['login'])) {

        require 'login.php';

    }

    //user register

    elseif (isset($_POST['register'])) {

        require 'register.php';

    }
}
?>


<body>

 <div class="header">
    <a href="index.php">
        <img src="img/logoimg.png" height="150" width="160" id="logoimg" class="logo">
    </a>
    <div class="header-right">
        <a class="active" href="index.php">Home</a>
        <a href="about.html" >About</a>
        <a href="contact.html">Contact</a>
        <a href="faqs.html">
            <img src="./img/faq.png" alt="faq" height="25" width="25" id="faqimg"/>
        </a>
    </div>
</div>


<!-- Login and Registration modal-->

<main>
    <section class="main-page">
        <div class="intro">
            <div class="intro-text">
                <h1>Team creation with ease</h1>
                <p>
                    The best team experience, manage your team.<br>
                    For teams players and for the club.
                </p>
            </div>

            <div class="reg">
                <button class="reg-select" onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
                </a>

                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form class="modal-content" action="index.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="containersignup">

                            <h1>Sign Up</h1>
                            <p>Please fill in this form to create an account. <br> Have an account?  <a href="index.php" id="lgintxt"> Login </a> </p>
                            <hr>

                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name='username' required/>
                            <label><b>Email Address</b></label>
                            <input type="email" placeholder="   Enter Email" name='email' required/>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name='password' required/>

                            <label><b>Confirm Password</b></label>
                            <input type="password" placeholder="Repeat Password" name='confirmpassword' required/>

                            <label><b>Select your avatar:</b></label>
                            <input type="file" name='avatar' accept="image/*" required />

                            <p>By creating an account you agree to our <a href="tandc.php" style="color:dodgerblue">Terms & Privacy</a>.</p>


                                <button type="submit" name="register" class="btn">Register</button>

                        </div>
                    </form>
                </div>


                     <!--Display the modal pages-->

                <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target === modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>



                <button class="reg-add" onclick="document.getElementById('id02').style.display='block'">Log in</button>
                </a>
                <div id="id02" class="modal02">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form class="modal-content" action="index.php" method="post" autocomplete="off">
                        <div class="containersignup">


                                    <h2 class="title">Welcome</h2>
                                        <hr>
                                          <label><b>Email Address</b></label>
                                        <input type="email" required autocomplete="off" placeholder="Enter Email" name='email' />

                                          <label><b>Password</b></label>
                                        <input type="password" required autocomplete="off" placeholder="Enter Password" name='password' />

                            <button class="btn" name="login">Log In</button>

                                   </div>
                    </form>
                </div>


                    <script>
                        // Get the modal
                        var modal = document.getElementById('id01');

                        // The user clicks anywhere outside of the modal and close

                        window.onclick = function(event) {
                            if (event.target === modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>

                    <script type="text/javascript" src="js/main.js"></script>

                </div>
            </div>
        </div>

        <div class="dis-cover">
            <img src="./img/img34.png" alt="display cover" />
        </div>
    </section>


        <!--Background Design -->

    <img class="circle-1" src="./img/big-eclipse.svg" alt="" />
    <img class="circle-2" src="./img/mid-eclipse.svg" alt="" />
    <img class="circle-3" src="./img/small-eclipse.svg" alt="" />

</main>



        <!-- Footer start-->

<footer>
    <div id="footer">
        <p id="footer-left">
            <a href="" >IA AJIDAHUN</a>
        <p id="footer-right">
            <a href="https://www3.rgu.ac.uk/about?" id="about">About</a>
            <span>©2020 <a href="http://www.rgu.ac.uk/">Robert Gordon University Aberdeen</a></span>
        </p>
    </div>
</footer>

            <!--Footer Ends-->

</body>
</html>

