<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 </title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="nama">Nama</label>
    <input type="text" name="nama" required>
    <br> 
    <input type="submit" value="Submit">

    <?php
    if (isset($_REQUEST['nama'])) {
    echo '<label class="result">"Form ini di-submit dengan
    metode: '.$_SERVER['REQUEST_METHOD'].'!"</label>';
    }
    ?>
    </form>

</body>
</html>