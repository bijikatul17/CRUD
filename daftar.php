<?php include("config.php"); ?>

<?php require_once('header.php'); ?>
    <div class="content">
        <div class="main">
            <form action="pendaftaran.php" method="POST">
                <table>
                    <tr>
                        <td><label for="nama">Nama :</label></td>
                        <td><input type="text" name="nama" 
                        placeholder="Isikan Nama Di Sini" width="100px"/></td>
                    </tr>
                    <tr>
                        <td><label for="jurusan">Jurusan : </label></td>
                        <td><input type="text" name="jurusan"
                        placeholder="Isikan Jurusan Di Sini" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="daftar" name="daftar"/>
                        </td>
                    </tr>
                </table>
            </form>    
        </div>
    </div>
<?php require_once('footer.php'); ?>