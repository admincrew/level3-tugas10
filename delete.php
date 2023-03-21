<?php
include_once('config.php');

$id = $_GET['id'];

$result = $conn->query("DELETE FROM produk WHERE id=$id");

header("Location: index.php");
