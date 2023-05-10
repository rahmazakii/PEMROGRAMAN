<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefilling Text Field</title>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?php echo isset
    ($_POST['nama']) ? $_POST['nama'] : '' ?>" required>
    <br>
    <input type="submit" value="Submit">
    <?php
    if (isset($_POST['nama'])) {
    echo '<label class="result">"Hello, '.$_POST['nama'].
    '!"</label>';
    }
    ?>
    </form>

</body>
</html>