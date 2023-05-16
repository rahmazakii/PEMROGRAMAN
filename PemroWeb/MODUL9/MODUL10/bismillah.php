<?php
        //menggunakan session
        session_start();
        if(isset($_POST['login'])) {
            $user = $_POST['user']; //mengambil id
            $pass = $_POST['pass']; //mengambil password
            // Digunakan untuk membuat session
            if ($user == "rahma" && $pass == "zaki") {
                $_SESSION['login'] = $user;
                header("location: studycase2.php");
            } else {
                echo "login gagal";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
                <title>Login</title>
                <link rel="stylesheet" type="text/css" href="style.css">
                <!-- Merupakan Script Javascript -->
                <script type="text/javascript">
                    function validateForm() {
                        var id = document.forms["loginForm"]["id"].value;
                        var password = document.forms["loginForm"]["password"].value;
                        if (id == "" || password == "") {
                            alert("ID/Username dan Password tidak boleh kosong.");
                            if (id == "") {
                                document.forms["loginForm"]["id"].focus();
                            } else {
                                document.forms["loginForm"]["password"].focus();
                            }
                            return false;
                        } else if (!/^[a-zA-Z]+$/.test(id) || !/^[a-zA-Z]+$/.test(password)) {
                            alert("ID/Username dan Password harus huruf.");
                            return false;
                        }
                    }
                </script>
    </head>
<body>
    <div class="login-box">
        <form action="" method="POST" class="login-email">
                <div class="container">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                <div class="input-group">
                Username : <input type="text" name="user"><br>
                </div>
                <br>
                <div class="input-group">
                Password : <input type="password" name="pass"><br>
                </div>
                <div class="input-group">
                <input class="btn" type="submit" value="Login" name="login">
                </div>
                <p class="login-register-text">Anda belum punya akun? <a href="studycase4.php">Register</a></p>
                </div>
                </form>
    </div>
    </body>
</html>