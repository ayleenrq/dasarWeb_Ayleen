<?php 
require('./koneksi.php');

function tampilSemuaDataEvent(){
    global $koneksi;
    
    $kueriSQL = "SELECT * FROM tbl_event_jti";
    $hasilKuery = sqlsrv_query($koneksi, $kueriSQL);

    $dataArrayEvent = [];

    while ($dataEvent = sqlsrv_fetch_array($hasilKuery)){
        $dataArrayEvent[] = $dataEvent;
    }

    return $dataArrayEvent;
} 

function tampilkanDataEventBerdasarkanId($idEvent){
    global $koneksi;

    $kueriSQL = "SELECT * FROM tbl_event_jti WHERE id_event = ?";
    $parameterWhere = array($idEvent);
    $hasilKuery = sqlsrv_query($koneksi, $kueriSQL, $parameterWhere);

    $dataArrayEvent = [];

    while ($dataEvent = sqlsrv_fetch_array($hasilKuery)){
        $dataArrayEvent[] = $dataEvent;
    }

    return $dataArrayEvent[0];
}

function tambahDataEvent($postDataEvent){
    global $koneksi;

    $nama = htmlspecialchars($postDataEvent["field_nama"]);
    $tanggal = htmlspecialchars($postDataEvent["field_tanggal"]);
    $waktu = htmlspecialchars($postDataEvent["field_waktu"]);
    $lokasi = htmlspecialchars($postDataEvent["field_lokasi"]);
    $deskripsi = htmlspecialchars($postDataEvent["field_deskripsi"]);

    $kueriSQL = "INSERT INTO tbl_event_jti (nama, tanggal, waktu, lokasi, deskripsi) VALUES (?, ?, ?, ?, ?)";
    $parameterInsert = array($nama, $tanggal, $waktu, $lokasi, $deskripsi);
    $hasilKueri = sqlsrv_query($koneksi, $kueriSQL, $parameterInsert);

    return $hasilKueri;
}

function ubahDataEvent($idEvent, $postDataEvent){
    global $koneksi;

    $nama = htmlspecialchars($postDataEvent["field_nama"]);
    $tanggal = htmlspecialchars($postDataEvent["field_tanggal"]);
    $waktu = htmlspecialchars($postDataEvent["field_waktu"]);
    $lokasi = htmlspecialchars($postDataEvent["field_lokasi"]);
    $deskripsi = htmlspecialchars($postDataEvent["field_deskripsi"]);

    $kueriSQL = "UPDATE tbl_event_jti SET nama = ?, tanggal = ?, waktu = ?, lokasi = ?, deskripsi = ? WHERE id_event = ?";
    $parameterUpdate = array($nama, $tanggal, $waktu, $lokasi, $deskripsi, $idEvent);
    $hasilKueri = sqlsrv_query($koneksi, $kueriSQL, $parameterUpdate);

    return $hasilKueri;
}

function menghapusDataEventBerdasarkanId($idEvent){
    global $koneksi;

    $kueriSQL = "DELETE FROM tbl_event_jti WHERE id_event = ?";
    $parameterWhere = array($idEvent);
    $hasilKueri = sqlsrv_query($koneksi, $kueriSQL, $parameterWhere);

    return $hasilKueri;
}
?>