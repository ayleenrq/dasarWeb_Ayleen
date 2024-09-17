<?php
$jumlahKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $jumlahKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $jumlahKursi ) * 100;

echo "Jumlah Kursi = 45<br>";
echo "Kursi Terisi = 28<br><br>";
echo "Persentase kursi kosong: ". round($persentaseKursiKosong, 2). "%";
?>