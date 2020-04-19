<?php

include ('db.php');

if($_GET ['op'] == "delete")
{
    $del_img=$_GET['file_name'];
    $query = "DELETE FROM uploads WHERE file_name='$del_img'";
    $result=mysqli_query($mysqli, $query);
    if($result){
        ?>
        <script>
            alert('The image has been deleted');
            window.location.href='photoupload.php?deleted';
        </script>

<!--        Delete from folder 'uploads'-->
        <?php
        unlink("uploads/$del_img");
    }

    else {
        ?>
        <script>
            alert('The image not yet deleted');
            window.location.href = 'photoupload.php?error';
        </script>
        <?php
    }
}
?>