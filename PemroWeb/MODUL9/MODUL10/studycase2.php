<?php 
 
session_start();
 
if (!isset($_SESSION['login'])) {
    header("Location: bismillah.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['login'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="studycase5.php" class="btn">Logout</a>
            </div>
            <!DOCTYPE html>

</body>
</html>
	
	
		
