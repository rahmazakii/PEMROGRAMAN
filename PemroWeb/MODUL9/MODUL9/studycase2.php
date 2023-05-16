<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card">
<?php
$id = $_POST["id"];
$password = $_POST["password"];
if (!is_string($id) || !is_string($password)) {
echo "ID/Username dan Password harus berupa string";
echo "<a class='back' href='studi_kasus.php'>Kembali</a>";
} else if ($id == "admin" && $password == "admin") {
echo "<label>Selamat datang, " . $id."!</label>";
echo "<a class='back' href='studi_kasus.php'>Logout</a>";
} else {
echo "Login gagal, silakan coba lagi";
echo "<a class='back' href='studi_kasus.php'>Kembali</a>";
}
?>
</div>

</body>
</html>