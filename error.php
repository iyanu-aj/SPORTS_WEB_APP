<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <?php include 'page.php'; ?>
</head>
<body>

<div class="reg">
    <div class="modal-content">
        <div class="containerlogin">
                <h1>Error</h1>
            <hr>
                <p>
                    <?php
                    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                        echo $_SESSION['message'];
                    else:
                        header( "location: index.php" );
                    endif;
                    ?>
                </p>
                <a href="index.php"><button class="btn"/>Home</button></a>

            </div>
        </div>
    </div>

</div>

</body>

</html>
