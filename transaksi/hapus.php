<?php 
include '../koneksi.php';

$id = $_GET["id_pinjam"];

$query = mysqli_query($kon,"DELETE FROM detail_pinjam WHERE id_pinjam='$id'");

$query = mysqli_query($kon,"DELETE FROM peminjaman WHERE id_pinjam='$id'");

if(isset($query)){
    header("location : index.php");
    exit;
}
else
{
    header("location : index.php");
    exit;
}
?>