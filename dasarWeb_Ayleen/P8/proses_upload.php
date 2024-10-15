<?php
// Mengubah lokasi penyimpanan gambar yang diunggah
$targetDirectory = "gambar/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan gambar yang diunggah ke direktori penyimpanan gambar
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "Gambar $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah Gambar $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada Gambar yang diunggah.";
}