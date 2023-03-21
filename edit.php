<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $namaProduk = $_POST['namaPro'];
    $ketProduk  = $_POST['ketPro'];
    $hargaProduk = $_POST['hargaPro'];
    $jumlahProduk = $_POST['jumlahPro'];

    $result = $conn->query("UPDATE produk SET nama_produk='$namaProduk', keterangan='$ketProduk', harga='$hargaProduk', jumlah='$jumlahProduk' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM produk WHERE id=$id");

while($dataProduk = $result->fetch_assoc()){
    $namaProduk = $dataProduk['nama_produk'];
    $ketProduk =  $dataProduk['keterangan'];
    $hargaProduk = $dataProduk['harga'];
    $jumlahProduk = $dataProduk['jumlah'];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
</head>
<body>
    <a href="index.php">Go to home</a>
    <br/><br/>

    <form action="edit.php" name="update_produk" method="POST">
        <table border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text"  name="namaPro" value="<?= $namaProduk; ?>"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="ketPro" value="<?= $ketProduk; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="hargaPro" value="<?= $hargaProduk; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlahPro" value="<?= $jumlahProduk; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>