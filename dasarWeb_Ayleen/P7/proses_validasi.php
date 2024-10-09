<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari request AJAX
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Inisialisasi array untuk menyimpan pesan kesalahan
    $errors = array();

    // Validasi nama
    if (empty($nama)) {
        $errors[] = 'Nama harus diisi.';
    }

    // Validasi email
    if (empty($email)) {
        $errors[] = 'Email harus diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Format email tidak valid.';
    }

    // Jika ada kesalahan validasi, tampilkan pesan kesalahan
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    } else {
        // Jika tidak ada kesalahan, lanjutkan proses
        // Misalnya, simpan data ke database atau kirim email
        echo 'Data berhasil dikirim: Nama = ' . $nama . ', Email = ' . $email;
    }
}
?>