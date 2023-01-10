<?php

$hostname = "localhost";
$database = "db_santri";
$username = "root";
$password = "";
$conn = mysqli_connect($localhost, $database, $username, $password);
// cek koneksi
if(!$conn) {
    die("nyasar min awokawok". mysqli_connect_error());
}

?>