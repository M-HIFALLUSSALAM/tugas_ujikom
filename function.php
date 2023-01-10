<?php

$conn = mysqli_connect("localhost", "root", "", "db_santri");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);

    $query = "INSERT INTO tb_santri
            VALUES ('', '$nama', '$alamat', '$telpon', '$ayah', '$ibu')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_santri WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);

    $query = "UPDATE tb_santri SET
            nama = '$nama',
            alamat = '$alamat',
            telpon = '$telpon',
            ayah = '$ayah',
            ibu = '$ibu'

            WHERE id = $id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

?>