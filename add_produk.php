<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Go to home</a>
    <br /><br />

    <form action="add_produk.php" method="POST" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="namaProduk"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keteranganProduk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="hargaProduk"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlahProduk"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Cek isi form yang di submit
    if (isset($_POST['submit'])) {
        $namaProduk = $_POST['namaProduk'];
        $ketProduk = $_POST['keteranganProduk'];
        $hargaProduk = $_POST['hargaProduk'];
        $jumlahProduk = $_POST['jumlahProduk'];

        // include database koneksi
        include_once('config.php');

        //Query masukkan data
        $result = $conn->query("INSERT INTO produk VALUES (NULL, '$namaProduk', '$ketProduk', '$hargaProduk', '$jumlahProduk')");

        //Tampilkan pesan berhasil
        echo "Produk telah berhasil ditambahkan. <a href='index.php'>Lihat Produk</a>";
    }

    ?>
</body>

</html>