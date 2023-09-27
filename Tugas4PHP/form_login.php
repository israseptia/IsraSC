<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
function cekLogin($username, $password)
{
    $adminUsername = "isra";
    $adminPassword = "admin";

    if ($username === $adminUsername && $password === $adminPassword) {
        //ke halaman admin jika user & pass benar
        header("Location: admin.php");
        exit;
    } else {
        // Tampilkan pesan error jika login gagal
        echo "Login gagal. Cek kembali username dan password Anda.";
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    cekLogin($username, $password);
}
?>
