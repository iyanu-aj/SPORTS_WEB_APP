<!--Player Upload photos-->

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <?php include 'profile.php'; ?>




</head>

<body>
<div class="content-fixture">
    <h3>Upload Photos</h3>
<form action="p_add_photo.php" method="post" enctype="multipart/form-data">
    <input  type="file" name="file_name"> <br>
    <button type="submit" name="submit" >Add</button>
</form>


<hr>
<h2>Images</h2>
    <div>
<?php
    include_once ('db.php');
            $data="SELECT * from UPLOADS";
            $result = mysqli_query($mysqli, $data);
             while ($row = mysqli_fetch_array($result)){?>


<img class="box" onclick='onClick(this)' id='myImg' src="<?php echo 'uploads/'.$row['file_name'];?>" width="100px" height="100px" />


    <div id="modal01" class="modalpic" onclick="this.style.display='none'">
        <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>

        <div class="modalpic-content">
            <img id="img01" style=" width:100%">
            <a class="btnsel" style="font-size: 14px; width: 100%; border-radius: 0px" href="p_del_photo.php?op=delete&file_name=<?php echo $row['file_name']?>">Delete</a>

        </div>
    </div>


    <script>
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script>
    </div>
    </section>
    </div>
</div>

    <?php


}

?>

</body>
</html>