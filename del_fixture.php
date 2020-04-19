<!--Delete a fixture-->

<?php

include ('db.php');

if($_GET ['op'] == "delete")
{
    $del_img=$_GET['id'];
    $query = "DELETE FROM GAMES WHERE GAME_ID='$del_img'";
    $result=mysqli_query($mysqli, $query);
    if($result){
        ?>
        <script>
            alert('deleted');
            window.location.href='schedule.php?deleted';
        </script>


        <?php
    }
}
?>