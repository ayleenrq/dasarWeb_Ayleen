<?php
$daftarSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Menampilkan seluruh daftar nama dan nilai siswa
echo "Daftar Seluruh Siswa: <br>";
foreach ($daftarSiswa as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}

// Menghitung total nilai
$totalNilai = 0;
for ($i = 0; $i < count($daftarSiswa); $i++) {
    $totalNilai += $daftarSiswa[$i][1];
} 

// Mencari rata-rata nilai
$rataRataNilai = $totalNilai / count($daftarSiswa);
   
// Menampilkan daftar mahasiswa yang memiliki nilai diatas rata-rata
echo "<br>Daftar Siswa yang memiliki nilai diatas rata-rata: <br>";
foreach ($daftarSiswa as $nilai) {
    if ($nilai[1] > $rataRataNilai) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
    }
}
?>