<?php
    session_start()
?>
<html>
    <body>
        <?php
        echo "Makanan Favorit saya adalah " . $_SESSION["makananfav"] . "<br>";
        echo "Minuman Favorit saya adalah " . $_SESSION["minumanfav"] . "<br>";

        print_r($_SESSION);
        ?>
    </body>
</html>