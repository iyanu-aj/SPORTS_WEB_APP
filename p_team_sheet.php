<!--Player download team sheet uploaded by admin-->

<?php
include_once 'db.php';
include_once "config.php";
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Team Sheet</title>
    <?php include 'profile.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<div class="content-fixture">

    <h3> View Team Sheet </h3>

    <div   style="color: darkred; font-size: 13px ">
        <p>Kindly, download the file containing the team selection for the next match</p>
    </div>

    <hr>
    <h4>Uploads</h4>

    <?php
    $data="SELECT * from File_uploads";
    $result = mysqli_query($mysqli, $data);
    while ($row = mysqli_fetch_array($result)){?>
    <div>


        <ul>
            <li>
                <i class="fa fa-file" style="color: #6f6f89 ">
         <a href="<?php echo 'file_upload/'.$row['file'];?>">
             <?php echo ''.$row['file'];?>
                </i>
            </a>
            </li>

        </ul>



        <?php


        }

        ?>
    </div>
</body>
</html>
