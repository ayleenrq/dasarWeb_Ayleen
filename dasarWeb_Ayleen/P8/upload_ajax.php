<?php
$targetDirectory = "file_ajax/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    
    for ($i = 0; $i < $totalFiles; $i++) {
        $errors = array();
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];

        @$file_ext = strtolower("" . end(explode('.', $_FILES['files']['name'][$i])) . "");
        $extensions = array("jpg", "jpeg", "png", "svg");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "<br>Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, SVG.";
        } else if ($file_size > 2097152) {
            $errors[] = "<br>Ukuran file tidak boleh lebih dari 2 MB";
        }

        if (empty($errors) == true) {
            $targetFilePath = $targetDirectory . basename($file_name);
            if (move_uploaded_file($file_tmp, $targetFilePath)) {
                echo "File " . $file_name . " berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file " . $file_name . ".<br>";
            }
        } else {
            echo "Error pada file " . $file_name . implode(" ", $errors) . "<br>";
        }
        echo "<br>";
    }
} else {
    echo "Tidak ada Gambar yang diunggah.";
}
?>