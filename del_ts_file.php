<!--Delete Team Sheet Files-->
<?php

include ('db.php');

if($_GET ['op'] == "delete")
{
    $del_file=$_GET['file'];
    $query = "DELETE FROM file_uploads WHERE file='$del_file'";
    $result=mysqli_query($mysqli, $query);
    if($result){
        ?>
        <script>
            alert('The file has been deleted');
            window.location.href='team_sheet.php?deleted';
        </script>

        <?php
        unlink("file_upload/$del_file");
    }

    else {
        ?>
        <script>
            alert('The file not yet deleted');
            window.location.href = 'team_sheet.php?error';
        </script>
        <?php
    }
}
?>