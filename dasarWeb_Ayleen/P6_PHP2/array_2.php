<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Diri</title>
        <style>
            body {
                background-color: #f7c9c9;
                font-family: Arial, Helvetica, sans-serif;
            }
            div.kolom-utama {
                background-color: #ffffff;
                width: 400px;
                margin: 100px auto;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            h4 {
                text-align: center;
                font-size: 20px;
                margin: 20px;
            }
            table {
                width: 100%;
            }
            table, th, td {
                border: 1,5px solid #ddd;
                font-size: 17px;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
        </style>
    </head>
    <body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>
    <div class="kolom-utama">
        <h4>Data Diri</h4>
        <table>
            <tr>
                <td>Nama</td>
                <td>:&nbsp;&nbsp;<?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td>:&nbsp;&nbsp;<?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:&nbsp;&nbsp;<?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </div>
    </body>
</html>
