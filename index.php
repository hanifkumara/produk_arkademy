<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Arkademy</title>
</head>

<body>
    <form method="post" action="">
        <input type="text" name="cari" placeholder="Cari di sini">
        <input type="submit" name="tombol" value="Cari!">
    </form><br>
    <a href="tambah.php">Tambah Produk</a>
    <br>

    <table width='80%' border=1>

        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        error_reporting(0);
        if ($_POST['cari'] != "") {
            $result = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%" . $_POST['cari'] . "%' OR keterangan LIKE '" . $_POST['cari'] . "' ");
        } 
        else {
            $result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
        }
        while ($data = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?= $data['nama_produk'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td>Rp. <?= $data['harga'] ?></td>
                <td><?= $data['jumlah'] ?></td>
                <td><a href='edit.php?id=<?= $data['id'] ?>'>Edit</a> |
                    <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('anda yakin akan menghapusnya??')">Delete</a></td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>