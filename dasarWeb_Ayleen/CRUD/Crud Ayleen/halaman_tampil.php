<?php
require('./fungsi.php');

$dataSemuaEvent = tampilSemuaDataEvent();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Tampil</title>
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
                        <a class="nav-link active" href="#">Halaman Utama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./halaman_tambah.php">Tambah Acara</a>
                    </li>
                </ul>  
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h4>Data Acara Konser</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Lokasi</th>
                            <th colspan="2" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataSemuaEvent as $dataEvent) : ?>
                            <tr>
                                <td><?= htmlspecialchars($dataEvent["nama"]) ?></td>
                                <td><?= htmlspecialchars($dataEvent["deskripsi"]) ?></td>
                                <td><?= $dataEvent["tanggal"] instanceof DateTime ? $dataEvent["tanggal"]->format('Y-m-d') : 
                                    htmlspecialchars($dataEvent["tanggal"]) ?></td>
                                <td><?= $dataEvent["waktu"] instanceof DateTime ? $dataEvent["waktu"]->format('H:i:s') : 
                                    htmlspecialchars($dataEvent["waktu"]) ?></td>
                                <td><?= htmlspecialchars($dataEvent["lokasi"])?></td>
                                <td class="text-center"><a href="./halaman_ubah.php?id_event=<?= $dataEvent["id_event"]?>" 
                                class="btn btn-sm btn-warning">Ubah</a></td>
                                <td class="text-center"><a href="#" onclick="return konfirmasiHapus(<?= $dataEvent['id_event']?>)" 
                                class="btn btn-sm btn-danger">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script>
        function konfirmasiHapus(idEvent) {
            if(confirm("Apakah anda yakin ingin menghapus data ini?")){
                console.log("Menghapus id " + idEvent);
                window.location.href = "halaman_hapus.php?id_event=" + idEvent;
                return true;
            }
            return false;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>