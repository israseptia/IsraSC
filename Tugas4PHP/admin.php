<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Landing Page</title>
</head>
<body style="background-color: pink;">
    <h1>Selamat datang, Admin!</h1>
    <h3>Biodata Admin</h3>
    <ul>
        <p>
            Nama: Isra Septia cahyani <br><br>
            Tanggal Lahir: 25 September 2003 <br><br>
            Umur: 20 Tahun <br><br>
            Hobby: Memasak <br><br>
            Perguruan Tinggi: Universitas Tadulako <br><br>
            Jurusan: Teknologi Informasi <br><br>
            Prodi: Teknik Informatika <br><br>
        </p>
    </ul>

</body>
</html>

<?php
function cekLogin($username, $password)
{
    $adminUsername = "isra";
    $adminPassword = "admin";

    if ($username === $adminUsername && $password === $adminPassword) {
        header("Location: admin.php");
        exit;
    } else {
        //pesan error jika login gagal
        echo "Login gagal. Cek kembali username dan password Anda.";
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    cekLogin($username, $password);
}
?>