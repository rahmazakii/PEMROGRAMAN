<?php 
    session_start(); /* Function untuk mengawali session*/
    if (isset($_POST['login'])) { 
        $user = $_POST['user'];
        $pass = $_POST['pass'];
            if($user == "" && $pass == "") {
                $_SESSION['login'] = $user; /*untuk menetapkan nilai variabel session. */
                echo "<h1>Hallo, kamu berhasil login !</h1>";
                echo "<h2>Klik <a href=studycase4.php'> disini (studycase4.php)</a> untuk menuju ke halaman pemeriksaan session</h2>";
            }
    }
    else {
        ?>
        
        <html>
            <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="style.css">
                <title> Login Disini</title>
            </head>
            <body>
            <form action="" method="POST" class="login-email">
                <div class="container">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                <div class="input-group">
                Username : <input type="text" name="user"><br>
                </div>
                <div class="input-group">
                Password : <input type="password" name="pass"><br>
                </div>
                <div class="input-group">
                <button name="submit" class="btn">Login</button>
                </div>
                <p class="login-register-text">Anda belum punya akun? <a href="studycase4.php">Register</a></p>
                </form>
                </div>
            </body>
        </html>
    <?php
} ?> 