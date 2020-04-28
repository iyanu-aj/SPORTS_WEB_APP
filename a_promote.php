<!--Adminstrator promote page-->

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Promote User</title>
    <?php include 'adminpage.php'; ?>


</head>

<body>



<div class="content-fixture">
    <h2><b>Promote Users</b></h2>
    <form action="update_promote.php" method="post">
        <div>
            <select class="optsel" name="username" required>
                <option value="" selected disabled hidden>Choose account</option>
                <?php

                $stmt->data_seek(0);
                while( $stmt->fetch() )
                {
                    echo "<option value='$username'>".$email."</option>\n";
                }

                $stmt->free_result();
                $link->close();
                ?>

            </select>
            <select class="optsel" name="type">
                <option value="" selected disabled hidden>New Position</option>
                <option value="A">Admin</option>
                <option value="P">Player</option>
            </select>
            <input type="submit" class="btnsel" value="Promote Now">
            <input type="reset" class="btnsel" value="Reset">
        </div>
    </form>
</div>

</body>
</html>

