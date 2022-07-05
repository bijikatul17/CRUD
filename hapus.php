<?php
include("config.php");

if(isset($_GET['id'])){

    //ambil id dari query string
    $id = $_GET['id'];

    //buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil
    if($query){
        header('location: list.php');
    }else{
        // apabila gagal menghapus data
        die("Gagal Menghapus .......");
    }
}else{
    die("Akses Gagal/Dilarang......");
}
?>