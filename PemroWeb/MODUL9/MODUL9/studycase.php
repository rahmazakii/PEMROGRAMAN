<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Case</title>
</head>

<body>
    <div class="card">
    <form id="loginForm" name="loginForm"
    action="studi_kasus_login.php" method="post" onsubmit="return
    validateForm()">
    <div id="formgroup">
    <label for="id">ID/Username:</label>
    <input type="text" id="id" name="id"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login" name="submit">
    </div>
    </form>
    </div>
    <script type="text/javascript">
    function validateForm() {
    var id = document.forms["loginForm"]["id"].value;
    var password = document.forms["loginForm"]["password"].value;
    if (id == "" || password == "") {
    alert("ID/Username dan Password harus diisi");
    if (id == "") {
    document.forms["loginForm"]["id"].focus();
    } else {
    document.forms["loginForm"]["password"].focus();
    }
    return false;
    } else if (!/^[a-zA-Z]+$/.test(id) ||
    !/^[a-zA-Z]+$/.test(password)) {
    alert("ID/Username dan Password harus berupa huruf saja");
    return false;
    }
    return true;
    }
    </script>

</body>
</html>