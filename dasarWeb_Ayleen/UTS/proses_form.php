<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $fullName = htmlspecialchars($_POST['full-name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Simpan ke file (opsional)
    $data = "Name: $fullName\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    file_put_contents('submissions.txt', $data, FILE_APPEND);

    // Kirim email (sesuaikan alamat email penerima)
    $to = 'your_email@example.com'; // Ganti dengan alamat email Anda
    $headers = "From: $fullName <$email>";
    $emailSubject = "New Contact Form Submission: $subject";
    $emailBody = "Name: $fullName\nEmail: $email\n\n$message";

    // Kirim email
    if (mail($to, $emailSubject, $emailBody, $headers)) {
        // Jika berhasil
        echo "Message sent successfully!";
    } else {
        // Jika gagal
        echo "Message could not be sent.";
    }
} else {
    echo "Invalid request.";
}
?>
