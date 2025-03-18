<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>