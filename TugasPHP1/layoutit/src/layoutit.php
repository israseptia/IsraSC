<?php
$namaSiswa = "Isra Septia Cahyani";
$tanggalLahir = "25 September 2003";
$usia = 23;
$alamat = "Jl.Manggis Palu barat";
$hobby = "Badminton dan Volleyball";
$email = "israseptiacahyani@gmail.com";
$ig = "israseptiac102";
$wa = '082323336666';
$perguruanTinggi = "Universitas Tadulako";
$jurusan = "Teknologi Informasi";
$prodi = "Teknik Informatika";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Layoutit</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h3 style="text-align: center;">
                            Welcome My Website <br> "<?= $namaSiswa ?>"
                        </h3> <br>
                        <p>
                            Hallo, perkenalkan nama saya: <strong><?= $namaSiswa ?></strong>. <br> 
                            Saya lahir pada tanggal <strong><?= $tanggalLahir ?></strong>. Usia <strong><?= $usia ?> Tahun</strong>. <br> 
                            Alamat saya berada di <strong><?= $alamat ?></strong>. <br> 
                            Saya memiliki hobby berolahraga yaitu <strong><?= $hobby ?></strong>. <br> 
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img alt="Bootstrap Image Preview" src="https://th.bing.com/th/id/OIP.vW3d53He57bME6SNuqKxQgHaHa?w=202&h=202&c=7&r=0&o=5&dpr=1.5&pid=1.7">
                    </div>
                </div> <br> <br>
                <h3 style="text-align: center;">
                    PORTOFOLIO
                </h3> <br>
                <div class="row">
                    <div class="col-md-4">
                        <img alt="Bootstrap Image Preview" src="https://th.bing.com/th/id/OIP.QjmSpYPjnzghq3yHoGNN7AHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7">
                    </div> 
                    <div class="col-md-4">
                        <dl>
                            <dt>
                                <?= $namaSiswa ?>
                            </dt> <br>
                            <dt>
                                Perguruan Tinggi
                            </dt>
                            <dd>
                                <?= $perguruanTinggi ?>
                            </dd>
                            <dt>
                                Jurusan
                            </dt>
                            <dd>
                                <?= $jurusan ?>
                            </dd>
                            <dt>
                                Prodi
                            </dt>
                            <dd>
                                <?= $prodi ?>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align: justify;">
                            <strong>Pengalaman, <br></strong> Saya memiliki pengalaman pada HTML dan CSS dalam pengembangan web dan proyek-proyek terkait. Selama kurang lebih 4 semester, saya pernah membuat beberapa project sederhana menarik dan mengembangkan keterampilan saya dalam berbagai aspek pengembangan web.
                        </p>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-md-12">
                        <address>
                            <strong>Contact</strong><br> Email : <?= $email ?><br> IG : <?= $ig ?><br> <abbr title="Phone">WA :</abbr> <?= $wa ?>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
