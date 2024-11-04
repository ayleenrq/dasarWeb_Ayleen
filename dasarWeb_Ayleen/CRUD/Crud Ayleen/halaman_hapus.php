<?php 
    require("./fungsi.php");

    if(!isset($_GET["id_event"])) {
        header("Location: ./index.php");
    }

    $hapusDataEvent = menghapusDataEventBerdasarkanId($_GET["id_event"]);
    
    if($hapusDataEvent) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location.href = './index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location.href = './index.php';
        </script>
        ";
    }
    
?>