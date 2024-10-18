<?php
$targetDirectory = "file_praktikum 4/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['file']['name'])) {
    $errors = "";
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("jpg", "jpeg", "png", "svg");

    if (!in_array($file_ext, $extensions)) {
        $errors = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, SVG.";
    } else if ($file_size > 2097152) {
        $errors = "Ukuran file tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors) == true) {
        $targetFilePath = $targetDirectory . basename($file_name);
        if (move_uploaded_file($file_tmp, $targetFilePath)) {
            echo "File " . $file_name . " berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file " . $file_name . ".<br>";
        }
    } else {
        echo "Error: " . $errors . "<br>";
    }
    echo "<br>";
} else {
    echo "Tidak ada file yang diunggah.";
}
?>