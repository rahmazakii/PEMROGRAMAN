<?php
include ("koneksi.php");

$nim = $_GET ['nim'];

$hasil = mysqli_query($koneksi, "DELETE from mahasiswa WHERE nim='$nim'");
if($hasil) {
    header ("location: full2.php");
}
?>