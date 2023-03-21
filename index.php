<?php

include_once('config.php');

$result = $conn->query("SELECT * FROM produk ORDER BY id DESC");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
</head>

<body>
    <a href="add_produk.php">Tambah Produk</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($produk = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $produk['nama_produk'] . "</td>";
            echo "<td>" . $produk['keterangan'] . "</td>";
            echo "<td>" . $produk['harga'] . "</td>";
            echo "<td>" . $produk['jumlah'] . "</td>";
            echo "<td><center><a href='edit.php?id=$produk[id]'>Edit</a> | <a href='delete.php?id=$produk[id]'>Hapus</a></center></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>