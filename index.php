<?php require_once('header.php'); ?>
        <div class="content">
            <div class="main">
                <h2>Penjelasan Singkat</h2>
                <p class="penulis">Laman ini ditulis oleh
                    <a href="https://www.instagram.com/luqmantbima/" 
                    class="penulis" target="_blank">Luqman Tri Bimantoro</a>
                    pada 11/10/2021 pukul 12:46 WIB
                </p>
                <nav>
                    <?php if (isset($_GET['status'])) :?>
                        <p>
                            <?php
                            if ($_GET['status'] == 'sukses') {
                                echo "<a href='index.php'>Pendaftaran Berhasil!!!!
                                      Klik Tulisan INI Untuk Keluar</a>";
                            } else {
                                echo "<a href='index.php'>Pendaftaran Gagal!!!!!
                                      Klik Tulisan INI Untuk Keluar</a>" ; 
                            }
                            ?>
                        </p>
                    <?php endif; ?>
                </nav>
                <p>
                    Halaman Web ini bertemakan PHP CRUD sederhana yang 
                    berisikan tentang form input data mahasiswa yang parameternya terdiri
                    dari id, nama dan jurusan.
                </p>
                <p>
                    Semoga dengan dikerjakan nya tugas ini dapat membuat mahasiswa-mahasiswa
                    berlatih dan mempelajari lagi materi-materi lampau tentang syntax-syntax
                    didalam pembuatan web mulai dari HTML, CSS, JavaScrpt, PHP hingga MySqli.
                </p>
                <p>
                    Sekian yang dapat saya sampaikan, kurang lebih nya mohon maaf. Wabillahi
                    taufiq wal hidayah, sumassalaumalaikum warroh matullahi wabarokatuh.<br>
                    <br><a style="font-style: italic;">Hormat Saya Sebagai Penulis,</a><br>
                    <br><a href="https://www.instagram.com/luqmantbima/"  
                    target="_blank" class="ttd">Luqman Tri Bimantoro</a><br>
                    <a href="">Dan teman-teman :</a><br>
                    <li>
                        <ul>Kevin Marino</ul>
                        <ul>Muhammad Abdullah Faqih</ul>
                    </li>
                </p>
            </div>
        </div>
<?php require_once('footer.php'); ?>