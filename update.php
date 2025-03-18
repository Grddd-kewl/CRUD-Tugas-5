<form action="update.php" method="POST">
    ID: <input type="text" name="id"><br>
    NPM: <input type="text" name="npm"><br>
    Nama: <input type="text" name="nama"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    <input type="submit" name="submit" value="Ubah Data">
</form>

<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET npm='$npm', nama ='$nama', jurusan ='$jurusan'
     WHERE id = '$id' ";
    mysqli_query($koneksi, $query);
    echo "Data Berhasil Diubah";
}
?>