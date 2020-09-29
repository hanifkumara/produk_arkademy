<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Arkademy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-2">
                <a class="btn btn-primary" href="tambah.php">Tambah Produk</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        error_reporting(0);
                        $result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");

                        while ($data = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?= $data['nama_produk'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td>Rp. <?= $data['harga'] ?></td>
                                <td><?= $data['jumlah'] ?></td>
                                <td><a class="badge badge-pill badge-success" href='edit.php?id=<?= $data['id'] ?>'>Edit</a> 
                                    <a class="badge badge-pill badge-danger" href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('anda yakin akan menghapusnya??')">Delete</a></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>