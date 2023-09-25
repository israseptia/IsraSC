<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Array</title>
</head>
<body>
    <?php
    $m1 = ['nim' => '0111111', 'nama' => 'Israsc', 'nilai' => 95];
    $m2 = ['nim' => '0111112', 'nama' => 'Iska', 'nilai' => 85];
    $m3 = ['nim' => '0111113', 'nama' => 'sela', 'nilai' => 75];
    $m4 = ['nim' => '0111114', 'nama' => 'lis', 'nilai' => 65];
    $m5 = ['nim' => '0111115', 'nama' => 'iloh', 'nilai' => 55];
    $m6 = ['nim' => '0111116', 'nama' => 'apipa', 'nilai' => 60];
    $m7 = ['nim' => '0111117', 'nama' => 'tri', 'nilai' => 35];
    $m8 = ['nim' => '0111118', 'nama' => 'andi', 'nilai' => 25];
    $m9 = ['nim' => '0111119', 'nama' => 'algi', 'nilai' => 45];
    $m10 = ['nim' => '0111110', 'nama' => 'elis', 'nilai' => 50];

    $ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];


    $jumlah_nilai = array_column($mahasiswa, 'nilai');
    $jumlah_mahasiswa = count($mahasiswa);
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $nilai_rata_rata = array_sum($jumlah_nilai) / $jumlah_mahasiswa;

    function hitungGrade($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) return "A";
        elseif ($nilai >= 75 && $nilai <= 84) return "B";
        elseif ($nilai >= 60 && $nilai <= 74) return "C";
        elseif ($nilai >= 30 && $nilai <= 59) return "D";
        elseif ($nilai >= 0 && $nilai <= 29) return "E";
        else return "";
    }


    function hitungPredikat($grade)
    {
        switch ($grade) {
            case "A":
                return "Memuaskan";
            case "B":
                return "Bagus";
            case "C":
                return "Cukup";
            case "D":
                return "Kurang";
            case "E":
                return "Buruk";
            default:
                return '';
        }
    }
    ?>

    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $judul) { ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) {
                $nilai = $mhs['nilai'];
                $keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
                $grade = hitungGrade($nilai);
                $predikat = hitungPredikat($grade);
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $nilai ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="3">Nilai Tertinggi</th>
                <th colspan="4"><?= $nilai_tertinggi ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Terendah</th>
                <th colspan="4"><?= $nilai_terendah ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Rata-Rata</th>
                <th colspan="4"><?= $nilai_rata_rata ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Mahasiswa</th>
                <th colspan="4"><?= $jumlah_mahasiswa ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Keseluruhan Nilai</th>
                <th colspan="4"><?= array_sum($jumlah_nilai) ?></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>
