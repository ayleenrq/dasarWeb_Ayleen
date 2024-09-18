<?php
$hargaProduk = 120000;

if ($hargaProduk >= 100000) {
    $diskon = 0.2;
} else {
    $diskon = 0;
}

$jumlahDiskon = $diskon * $hargaProduk;
$hargaDiskon = $hargaProduk - $jumlahDiskon;

echo "Harga awal : Rp. ". number_format($hargaProduk, 0, ',', '.'). "<br>";
echo "Diskon : ". $diskon * 100 . "%<br>";
echo "Jumlah diskon : Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
echo "Harga setelah diskon : Rp. ". number_format($hargaDiskon, 0, ',', '.');
?>
