<?php
include("config.php");


if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];


    $result = mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga', jumlah='$jumlah' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $nama_produk = $user_data['nama_produk'];
    $keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4">
                <a class="btn btn-info" href="index.php">Go to Home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush mx-3">
                        <form action="" method="post">
                            <div class="form-group mt-1">
                                <label for="nama">Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" id="nama" value="<?= $nama_produk ?>">
                            </div>
                            <div class="form-group">
                                <label for="ket">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="ket" value="<?= $keterangan ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id:="harga" value="<?= $harga ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $jumlah ?>">
                            </div>
                            <td><input type="hidden" name="id" value=<?= $_GET['id']; ?>></td>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>