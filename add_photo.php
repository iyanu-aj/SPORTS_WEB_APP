<!--Add a Photo action-->

<?php
include_once ('db.php');
if (isset($_POST['submit']))
{
    $file_name = rand(1000,100000)."-".$_FILES['file_name']['name'];
    $file_loc = $_FILES['file_name']['tmp_name'];
    $folder="uploads/";
    $new_file_name = strtolower($file_name);
    $final_file=str_replace('','-',$new_file_name);

    if (move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO uploads(file_name) VALUES ('$final_file')";
        mysqli_query($mysqli,$sql);
        ?>

        <script>
            alert('successfully uploaded');
            window.location.href='photoupload.php?successs';
        </script>

        <?php
    }
    else
    {
        echo "Upload Error";
    }
}

?>
