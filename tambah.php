<html>

<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO produk(nama_produk,keterangan,harga, jumlah) VALUES('$nama_produk','$keterangan','$harga','$jumlah')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>

</html>