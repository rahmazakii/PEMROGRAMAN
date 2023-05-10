<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL 9</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get" > Nama
    <input type="text" name="nama" />
    <br>
    <input type="submit" value="OK">
<br>
</form>
<?php

'<label class="result">"Hello, '.$_GET['nama'].
'!"</label>';
    if (isset($_GET['nama'])) {
        echo '<label class="result">"Hello, '.$_GET['nama'].
        '!"</label>';;
    }
?>

</body>
</html>