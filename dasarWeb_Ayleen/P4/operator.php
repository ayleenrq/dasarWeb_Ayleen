<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari perhitungan a = $a dan b = $b <br><br>";
echo "Hasil penjumlahan (a dan b) = ". $hasilTambah. "<br>";
echo "Hasil pengurangan (a dan b) = ". $hasilKurang. "<br>";
echo "Hasil perkalian (a dan b) = ". $hasilKali. "<br>";
echo "Hasil pembagian (a dan b) = ". $hasilBagi. "<br>";
echo "Hasil sisa pembagian (a dan b) = ". $sisaBagi. "<br>";
echo "Hasil pangkat (a dan b) = ". $pangkat. "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama= $a >= $b;

echo "<br><br>Hasil dari perbandingan a = $a dan b = $b <br><br>";
echo "Hasil (a) sama dengan (b) = $hasilSama <br>";
echo "Hasil (a) tidak sama dengan (b) = $hasilTidakSama <br>";
echo "Hasil (a) lebih kecil dari (b) = $hasilLebihKecil <br>";
echo "Hasil (a) lebih besar dari (b) = $hasilLebihBesar <br>";
echo "Hasil (a) lebih kecil sama dengan (b) = $hasilLebihKecilSama <br>";
echo "Hasil (a) lebih besar sama dengan (b) = $hasilLebihBesarSama <br>";
?>