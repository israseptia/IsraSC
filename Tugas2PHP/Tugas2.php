<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri</title>
</head>
<body>
    <h1>Form Data Diri</h1>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
        <br> <br>
        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan" id="pekerjaan">
            <option value="">--Pilihan Pekerjaan--</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Programmer">Programmer</option>
            <option value="Pengacara">Pengacara</option>
            <option value="Insinyur">Insinyur</option>
            <option value="Penyiar Radio/TV">Penyiar Radio/TV</option>
            <option value="Satpam">Satpam</option>
            <option value="Psikolog">Psikolog</option>
            <option value="Tentara">Tentara</option>
            <option value="Polisi">Polisi</option>
        </select><br><br>

        <label>Hobby:</label><br>
        <input type="radio" name="hobby" id="hobby1" value="Bulu Tangkis">
        <label for="hobby1">Bulu Tangkis</label>
        <br>
        <input type="radio" name="hobby" id="hobby2" value="Bola Voli">
        <label for="hobby2">Bola Voli</label>
        <br>
        <input type="radio" name="hobby" id="hobby3" value="Tenis Meja">
        <label for="hobby3">Tenis Meja</label>
        <br>
        <input type="radio" name="hobby" id="hobby4" value="Bersepeda">
        <label for="hobby4">Bersepeda</label>
        <br>
        <input type="radio" name="hobby" id="hobby5" value="Berenang">
        <label for="hobby5">Berenang</label>
        <br>
        <input type="radio" name="hobby" id="hobby6" value="Membaca">
        <label for="hobby6">Membaca</label>
        <br>
        <input type="radio" name="hobby" id="hobby7" value="Sepak Bola">
        <label for="hobby7">Sepak Bola</label>
        <br>
        <input type="radio" name="hobby" id="hobby8" value="Futsal">
        <label for="hobby8">Futsal</label>
        <br>
        <input type="radio" name="hobby" id="hobby9" value="Musik">
        <label for="hobby9">Musik</label>
        <br>
        <input type="radio" name="hobby" id="hobby10" value="Menulis">
        <label for="hobby10">Menulis</label>
        <br><br>
        <button name="simpan" type="submit">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];
    ?>
    <br>
    <h2>Data Diri :</h2>
    <table border="">
        <tr>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Hobby</th>
        </tr>
        <tr>
            <td><?= $nama ?></td>
            <td><?= $pekerjaan ?></td>
            <td><?= $hobby ?></td>
        </tr>
    </table>

    <?php } ?>

</body>
</html>
