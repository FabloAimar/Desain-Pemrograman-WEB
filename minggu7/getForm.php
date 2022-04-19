<html>
    <head>

    </head>
    <body>
        <?php
            if (isset($_GET["myname"]) AND isset ($_GET["myaddress"])){
                echo "Selamat datang" . $_GET["myname"] . "!!<br>";
                echo "Dari" . $_GET["myaddress"];
            }
            else {
                echo"Anda harus mengakses halaman ini dari form1.html";
            }
        ?>
    </body>
</html>