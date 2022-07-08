<?php require_once('header.php'); ?>
    <div class="content">
        <h2>Menu</h2>
            <nav>
                <?php if (isset($_GET['status'])) :?>
                    <p>
                        <?php
                            if ($_GET['status'] == 'sukses') {
                                echo "Pendaftaran Berhasil";
                            } else {
                                echo "Pendaftaran Gagal" ; 
                            }
                        ?>
                    </p>
                <?php endif; ?>
                <ul>
                    <li><a href="daftar.php">Daftar Baru</a></li>
                    <li><a href="list.php">List Mahasiswa</a></li>
                </ul>
            </nav>
    </div>
<?php require_once('footer.php'); ?>