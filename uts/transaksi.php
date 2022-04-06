<html>
    <head>
        <title>Total Transaksi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="transaksi.css">
    </head>
    <body class="tampil">
        <header>
            <div class="nama">
                <h1>KOPI MALANG</h1>
            </div>
            <div class="container">
            <ul>
                <li><a href="uts.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="transaksi.html">TRANSAKSI</a></li>
                <li><a href="foto.html">UP-FOTO</a></li>
            </ul>
            </div>
        </header>
        <h1>Total Transaksi</h1>
            <?php
                if(isset($_POST['nama']) AND isset($_POST['status']) AND isset($_POST['menu']) AND isset($_POST['jumlah'])){
                    $nama=$_POST['nama'];
                    $status=$_POST['status'];
                    $menu=$_POST['menu'];
                    $jumlah=$_POST['jumlah']; 
                    $jumlahTransaksi="";
                    $jumlahDiskon="";
                    $total="";
                }

                if($status == "Member") {
                    if($menu == "paket1") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket2") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket3") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }
                }else {
                    if($menu == "paket1") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket2") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket3") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }
                }

                //menampilkan total pesanan 
                echo "Nama Pembeli        : " .$nama;
                echo "<br>";
                echo "Status Pembeli      : " .$status;
                echo "<br>";
                echo "Total Harga         : " .$jumlahTransaksi;
                echo "<br>";
                echo "Total Diskon        : " .$jumlahDiskon;
                echo "<br><br>";
                echo "Yang harus Anda bayarkan " .$total;
                echo "<br><br><br><br><br>";
                echo "<br><br><br><br><br>";
            ?>
        <footer>
            <div class="container">
                <small>Coppyright &copy; 2022 . Fablo Aimar. All Right Reserved.</small>
            </div>
        </footer>
    </body>
</html>