<?php include("config.php"); ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="judul">Data Mahasiswa</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="list.php">Daftar Mahasiswa</a></li>
                    <li><a href="daftar.php">Daftar Baru</a></li>
                    <li><a href="about.php">Tentang Penulis</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="main">
                    <ul class="gallery" id="gallery">
                        <li>
                            <a href="#gambar-1">
                                <img src="img/thumb/18083000148.jpg" 
                                alt="Luqman_Tri_Bimantoro">
                                <span>Luqman Tri Bimantoro</span>
                            </a>
                            <div class="overlay" id="gambar-1">
                                <a href="#" class="close">X Close</a>
                                <img src="img/full/18083000148.jpg" 
                                alt="Luqman_Tri_Bimantoro">
                            </div>
                        </li>
                        <div class="clear"></div>
                    </ul>
                    <p>
                        Penulis merupakan mahasiswa Universitas Merdeka Malang
                        yang berkelahiran pada 17 Oktober 2000 di Kota Tanjung Selor
                        Provinsi Kalimantan Utara. Merupakan anak bungsi dari 3 
                        bersaudara yang merantau ke jawa untuk menempuh pendidikan 
                        sekolah tinggi dan berharap mendapatkan ilmu yang bermanfaat 
                        dalam kehidupan sehari-hari.
                    </p>
                </div>
            </div>
            <div class="footer">
                <p class="copy">Copyright 2021.Luqman Tri Bimantoro</p>
            </div>  
        </div>      
    </body>
</html>