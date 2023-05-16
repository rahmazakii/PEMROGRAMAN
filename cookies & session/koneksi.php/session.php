<?php 
    session_start(); /* Function untuk mengawali session*/
    if (isset($_POST['login'])) { 
        $user = $_POST['user'];
        $pass = $_POST['pass'];
            if($user == "rahma" && $pass == "1111") {
                $_SESSION['login'] = $user; /*untuk menetapkan nilai variabel session. */
                echo "<h1>Hallo, kamu berhasil login !</h1>";
                echo "<h2>Klik <a href=session2.php'> disini (session2.php)</a> untuk menuju ke halaman pemeriksaan session</h2>";
            }
    }
    else {
        ?>
        <html>
            <head>
                <title> Login Disini</title>
            </head>
            <body>
                <form action="" method="post">
                <h2>Login Disini</h2>
                Username : <input type="text" name="user"><br>
                Password : <input type="password" name="pass"><br>
                <input type="submit" name="login"value="login">
                </form>
            </body>
        </html>
    <?php
} ?>