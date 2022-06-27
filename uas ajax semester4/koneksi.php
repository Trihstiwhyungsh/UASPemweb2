<?php
$conn_str = "host=abul.db.elephantsql.com " .
    "port=5432 " .
    "user=postgres " .
    "dbname=sipeg " .
    "password=hesti";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>