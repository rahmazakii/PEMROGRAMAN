<?php 
    session_start();
    if (isset($_SESSION['login'])) {
        session_unset();
        session_destroy();

        echo "<h1>Kamu sudah berhasil logout/keluar</h1>";
        echo "<h2>Klik <a href='session.php'>disini</a> untuk login lagi.
        <br>Kmu tidak bisa masuk ke <a href='session2.php'>HOME (beranda)</a>lagi.<.h2>";
    }
    ?>
