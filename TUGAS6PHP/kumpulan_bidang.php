<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(7);
$persegiPanjang = new PersegiPanjang(5, 10);
$segitiga = new Segitiga(6, 8);
$dataBidang = [
    $lingkaran,
    $persegiPanjang,
    $segitiga
];

echo '<h2>Data Bidang 2D</h2>';
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>No</th>';
echo '<th>Nama Bidang</th>';
echo '<th>Keterangan</th>';
echo '<th>Luas Bidang</th>';
echo '<th>Keliling Bidang</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($dataBidang as $key => $bidang) {
    echo '<tr>';
    echo '<td>' . ($key + 1) . '</td>';
    echo '<td>' . $bidang->namaBidang() . '</td>';
    echo '<td>Luas dan Keliling</td>';
    echo '<td>' . $bidang->luasBidang() . '</td>';
    echo '<td>' . $bidang->kelilingBidang() . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>
