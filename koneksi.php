<?php 
    $conn = mysqli_connect("localhost", "root", "", "db_coba");

    if($conn){
        echo "koneksi berhasil, sampai jumpa lagi";
    }else{
        echo "koneksi gagal, silahkan coba lagi". mysqli_connect_error();
        die();
    }
?>
