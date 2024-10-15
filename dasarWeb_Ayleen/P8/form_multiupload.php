<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Gambar</title>
    </head>
    <body>
        <h2>Unggah Gambar</h2>
        <form action="proses_uploadGambar.php" method="post" enctype="multipart/form-data">
            <!-- Mengubah jenis file menjadi gambar -->
            <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png">
            <input type="submit" value="Unggah">
        </form>
    </body>
</html>