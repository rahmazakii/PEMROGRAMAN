<?php
include ("koneksi.php");

$nim = $_POST ['nim'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];

$hasil = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat' where nim='$nim'");
if($hasil) {
    header ("location: full2.php");
}
?>