<?php 
include('koneksi.php');
$id = $_GET['nim'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
</head>
<body>
    <h3>Edit Data Mahasiswa</h3>
    <h5>Mengedit data mahasiswa</h5>
    <form method="post" action="update.php">
        <table>
        <?php while($d = mysqli_fetch_array($data)){ ?>
            <input type="hidden" value="<?= $d['nim'] ?>" name="nim" >
            <tr>
                <td>Nama</td>
                <td><input type="text" value="<?= $d['nama'] ?>" name="nama" ></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" value="<?= $d['alamat'] ?>" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="SIMPAN"></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>