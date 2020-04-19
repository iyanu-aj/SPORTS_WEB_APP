<!--Team Sheet Upload By Admin-->

<?php
include_once 'db.php';
include_once "config.php";
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Team Sheet</title>
    <?php include 'adminpage.php'; ?>

</head>

<body>


<div class="content-fixture">

    <h3> Upload Team Sheet </h3>

    <div   style="color: darkred; font-size: 13px ">
        <p>Kindly, upload a file containing the team selection for the next match</p>
</div>
    <form action="ts_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <button type="submit" name="upload">Upload</button>
    </form>

<hr>
<h4>Uploads</h4>

    <?php
    $data="SELECT * from File_uploads";
    $result = mysqli_query($mysqli, $data);
    while ($row = mysqli_fetch_array($result)){?>
<div>
<ul>
    <li ><?php echo ''.$row['file'];?>
    <a class="btnsel" style="font-size: 12px; width: 100%; border-radius: 0px" href="del_ts_file.php?op=delete&file=<?php echo $row['file']?>">Delete</a>
    </li>
</ul>



<?php


}

?>
</div>
</body>
</html>
