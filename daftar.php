<?php include("config.php"); ?>

<!doctype html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>

    <body>
        <header>
            <h3>Data Mahasiswa</h3>
        </header>
        <form action="pendaftaran.php" method="POST">
           <table border="0" cellpadding="5">
                <tr>
                    <td><label for="nama">Nama : </label></td>
                    <td><inpuWt type="text" name="nama" 
                    placeholder="Isikan Nama Di Sini" /></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan : </label></td>
                    <td><input type="text" name="jurusan"
                    placeholder="Isikan Jurusan Di Sini" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="daftar" name="daftar" />
                    </td>
                </tr>
           </table>
        </form>
    </body>
</html>