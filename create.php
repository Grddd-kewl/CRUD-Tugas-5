<form action="create.php" method="POST">
NPM: <input type="text" name="NPM"><br>
Nama: <input type="text" name="Nama"><br>
Jurusan: <input type="text" name="Jurusan"><br>
<input type="Submit" name="submit" value="Tambah Data">
</form>
<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$query = "INSERT INTO mahasiswa (NPM, Nama, Jurusan) VALUES ('$NPM','$Nama', '$Jurusan')";
mysqli_query($koneksi, $query);
echo "Data berhasil ditambahkan.";}
?>