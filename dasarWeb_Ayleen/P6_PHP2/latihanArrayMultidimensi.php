<!DOCTYPE HTML>
<html>
    <head>
        <title>Array Multidimensi</title>
    </head>
    <body>
        <h2>Data Mahasiswa Array Multidimensi</h2>
        <ul>
            <?php
                $data = array(
                    array("Ayleen Ruhul Qisthy", 2341720012, "Teknologi Informasi", "qisthyayleen@gmail.com"),
                    array("Claudya Destine", 2341720165, "Teknik Elektro", "claudyadestine@gmail.com"),
                    array("Day Eka Permata", 2341720001, "Akuntansi", "dayekapermata@gmail.com"),
                );
                
                for ($i = 0; $i < count($data); $i++) { 
                    echo "<li>Nama    : " . $data[$i][0] . "</li>";
                    echo "<li>NIM     : " . $data[$i][1] . "</li>";
                    echo "<li>Jurusan : " . $data[$i][2] . "</li>";
                    echo "<li>Email   : " . $data[$i][3] . "</li>";
                    echo "<br/>";
                }
            ?>
        </ul>
    </body>
</html>
