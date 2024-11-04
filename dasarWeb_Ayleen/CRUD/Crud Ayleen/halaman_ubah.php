<?php 

if(!isset($_GET["id_event"])) {
    header("Location: ./index.php");
}

if($_GET["id_event"] == ""){
    header("Location: ./index.php");
}

require("./fungsi.php");

$dataEvent = tampilkanDataEventBerdasarkanId($_GET["id_event"]);

if(isset($_POST["tombol_submit"])) {
    $ubahDataEvent = ubahDataEvent($_GET["id_event"], $_POST);

    if($ubahDataEvent) {
        echo "
        <script>
            alert('Data berhasil diubah');
            window.location.href = './index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            window.location.href = './index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Acara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #fff; border-bottom: 1px solid #ccc;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Acara Konser</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="gap: 2rem;">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Halaman Utama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./halaman_tambah.php">Tambah Acara</a>
                    </li>
                </ul>  
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="mx-auto">
            <div class="card">
                <div class="card-header">
                    Ubah Data Acara
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3 row">
                            <label for="labelNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="field_nama" id="labelNama" value="<?= $dataEvent['nama'] ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="labelDeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="field_deskripsi" id="labelDeskripsi" value="<?= $dataEvent['deskripsi']?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="labelTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="field_tanggal" id="labelTanggal" value="<?= $dataEvent['tanggal'] 
                                instanceof DateTime? $dataEvent["tanggal"]->format('Y-m-d') : $dataEvent["tanggal"]?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="labelWaktu" class="col-sm-2 col-form-label">Jam</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" name="field_waktu" id="labelWaktu" value="<?= $dataEvent['waktu'] 
                                instanceof DateTime? $dataEvent["waktu"]->format('H:i:s') : $dataEvent["waktu"]?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="labelLokasi" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="field_lokasi" id="labelLokasi" value="<?= $dataEvent['lokasi']?>" required>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end">
                            <a href="./index.php" type="cancel" name="tombol_batal" class="btn btn-warning">Batal</a> 
                            <button type="submit" name="tombol_submit" class="btn btn-primary ms-2">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>