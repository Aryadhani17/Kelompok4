<?php
require 'koneksi.php';
//Menambah barang baru
if(isset($_POST['add'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $query = mysqli_query($connect, "INSERT INTO stok (namabarang, deskripsi, stok) values('$namabarang','$deskripsi','$stok')");
    if($query){
        header('location: index.php');
    } else{
        echo "GAGAL! Menambahkan barang";
        header('location: index.php');
    }
}

?>