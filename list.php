<?php include("config.php"); ?>

<!doctype html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <header>
            <H3>Daftar Mahasiswa Terdaftar</H3>
        </header>

        <nav>
            <a href="daftar.php">[+] Tambah Baru</a>
        </nav>
        <br>

        <table cellpadding="5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM mahasiswa";
                $query mysql_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['jurusan']."</td>";

                    echo "<td>";
                    echo "<a href='edit.php?id=".$siswa['id'].
                    "'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id'].
                    "'>Hapus</a> | ";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Total Mahasiswa : <?php echo mysql_num_rows($query) ?></p>
    </body>
</html>