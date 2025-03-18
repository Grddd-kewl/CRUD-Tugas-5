<?php
    include 'koneksi.php';

    $query = "SELECT * FROM mahasiswa";
    $hasil = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th>Operasi</th>
            </tr>

        <?php while($data = mysqli_fetch_assoc($hasil)): ?>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['npm']; ?></td>
                <td><?= $data['jurusan']; ?></td>
                <td>
                    <a href="update.php?id=<?= $data['id']; ?>">Edit</a> / 
                    <a href="delete.php?id=<?= $data['id']; ?>">hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
            
    </table>
</body>
</html>