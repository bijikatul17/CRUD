<?php 

include("config.php");

//cek apaah tombol daftar sudah di klik atau belum
if(isset($_POST['daftar.php'])){

    //ambil data dari formulir
    $nama = $_POST['mama'];
    $jurusan = $_POST['jurusan'];

    //buat query
    $sql = "INSERT INTO mahasiwa (nama, jurusan) VALUE
    ('$nama', '$jurusan')":
    $query = mysqli_query($db, $sql);

    //apakah qeury sudah berhasil menyimpan data
    if($query){
        /* kalau berhasil simpan data, di navigasikan 
        ke halaman index.php dengan status sukses */
        header('location: index.php?status=sukses');
    } else {
        /* kalau gagail simpan data, di navigasikan 
        ke halaman index.php dengan status gagal */
        header ('location: index.php?status=gagal');
    } 
} else {
    die ("Akses Gagal/Dilarang....");
}
?>