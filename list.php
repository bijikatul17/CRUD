<?php include("config.php"); ?>

<?php require_once('header.php'); ?>
    <div class="content">
        <div class="main">
            <table> 
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
                        $query = mysqli_query($db, $sql);

                        while ($siswa = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$siswa['id']."."."</td>";
                            echo "<td>".$siswa['nama']."</td>";
                            echo "<td>".$siswa['jurusan']."</td>";
                            echo "<td>";
                            echo "<a href='edit.php?id=".$siswa['id'].
                            "' class='edit'>Edit</a>  ";
                            echo "<a href='hapus.php?id=".$siswa['id'].
                            "' class='hapus'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="total">
                <p>
                    Total Mahasiswa : <?php echo mysqli_num_rows($query) ?>
                </p>
            </div>
            
        </div>
    </div>
<?php require_once('footer.php'); ?>