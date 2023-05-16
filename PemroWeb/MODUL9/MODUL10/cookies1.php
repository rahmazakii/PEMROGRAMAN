<?php
    $value1 = "rahma";          /* Merupakan parameter yang digunakan untuk set cookies*/
    $value2 = "Rahma Zaki";     /* Merupakan parameter yang digunakan untuk set cookies*/
    setcookie("username", $value1);         /*setcookie digunakan untuk membuat function pada xookie */
    setcookie("nama_lengkap", $value2, time()+3600);
    echo "<h2> ini halaman untuk set cookies ";     
    echo "<h2> Klik <a href='cookies2.php'>disini </a> untuk memeriksa cookies.";
    ?>
