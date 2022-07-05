<?php 
include("config.php");

// cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){
    //ambil data dari formulir
    $id = $_post['id'];
    $nama = $_post['nama'];
    $jurusan = $_post['jurusan'];

    //buat query update
    $sql = "UPDATE mahasiswa SET nama='$nama',
    jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apabila query berhasil di update
    if($query){
        //kalau berhasil di nav ke halaman list.php
        header('location: list.php');
    } else {
        // kalau gagal menyimpan
        die("Gagal Menyimpan Perubahan Data.... ");
    }
}else{
    die("Akses Gagal/Dilarang...");
}
?>