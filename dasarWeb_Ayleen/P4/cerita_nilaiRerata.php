<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

echo "Nilai siswa terurut (ascending) : ";
foreach ($nilaiSiswa as $nilai) {
    echo $nilai. " ";
}

$totalNilai = 0;
echo "<br><br>Nilai setelah mengabaikan 2 nilai tertinggi dan terendah : ";
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
    echo $nilaiSiswa[$i]. " ";
}

$rataRata = $totalNilai / (count($nilaiSiswa) - 4);
echo "<br>Total nilai = $totalNilai <br>";
echo "Hasil Nilai Rata - Rata = $rataRata";
?>
