<?php
require 'Suhu.php';

//objek KonversiSuhu 
$dataKonversiSuhu1 = new KonversiSuhu("Celcius", 30, "Fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("Celcius", 35, "Fahrenheit");
$dataKonversiSuhu3 = new KonversiSuhu("Fahrenheit",100, "Celcius");
$dataKonversiSuhu4 = new KonversiSuhu("Fahrenheit", 212, "Celcius");
$dataKonversiSuhu5 = new KonversiSuhu("Celcius", 95, "Rheamur");
$dataKonversiSuhu6 = new KonversiSuhu("Celcius", 55, "Rheamur");
$dataKonversiSuhu7 = new KonversiSuhu("Rheamur", 70, "Celcius");
$dataKonversiSuhu8 = new KonversiSuhu("Rheamur", 20, "Celcius");

// Tabel cetak hasil konversi
echo "<table border='1'>";
echo "<tr>";
echo "<th>Satuan Suhu Awal</th>";
echo "<th>Besaran Suhu</th>";
echo "<th>Satuan Suhu Tujuan</th>";
echo "<th>Hasil Konversi</th>";
echo "</tr>";

//cetak hasil konversi pada setiap objek KonversiSuhu
echo "<tr>";
echo "<td>" . $dataKonversiSuhu1->konversi() . "</td>";
echo "<td>" . $dataKonversiSuhu2->konversi() . "</td>";
echo "<td>" . $dataKonversiSuhu3->konversi() . "</td>";
echo "<td>" . $dataKonversiSuhu4->konversi() . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $dataKonversiSuhu5->konversi() . "</td>";
echo "<td>" . $dataKonversiSuhu6->konversi() . "</td>";
echo "<td>" . $dataKonversiSuhu7->konversi() . "</td>";
echo "<td>" . $dataKonversiSuhu8->konversi() . "</td>";
echo "</tr>";

echo "</table>";

?>
