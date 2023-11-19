<?php 
    if(isset($_GET['login'])){
        if($_GET['username'] == $username && $_GET['password'] == $password ){
            echo "Anda Berhasil Login";
        };
    };
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet"  href="/css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Selamat Datang</h2>
        <form action="" method="get">
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <a href="beranda admin">Masuk Halaman admin</a>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
