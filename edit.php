<?php 
    include("config.php");

    // kalau tidak ada data idnya di query string
    if( !isset($_GET['id']) ){
        header('location: list.php');
    }

    // ambil id dari query
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data di edit tidak di temukan
    if (mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan");
    }
?>


<?php require_once('header.php'); ?>
    <div class="content">
        <div class="main">
            <form action="edits.php" method="POST">
            <table>
                    <tr>
                        <input type="hidden" name="id" value="<?php 
                        echo $siswa['id'] ?>">
                    </tr>
                    <tr>
                        <td><label for="nama">Nama : </label></td>
                        <td><input type="text" name="nama" 
                        placeholder="Isikan Nama Di Sini" 
                        value="<?php echo $siswa['nama'] ?>" /></td>
                    </tr>
                    <tr>
                        <td><label for="jurusan">Jurusan : </label></td>
                        <td><input type="text" name="jurusan"
                            placeholder="Isikan Jurusan Di Sini" 
                            value="<?php echo $siswa['jurusan'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="simpan" name="simpan" />
                        </td>
                    </tr>
            </table>
            </form>
        </div>
    </div>
<?php require_once('footer.php'); ?>