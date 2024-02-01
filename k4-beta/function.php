<?php
require 'koneksi.php';

//Menambah barang baru
if(isset($_POST['addbaru'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $querybaru = mysqli_query($connect, "INSERT INTO stok (namabarang, deskripsi, stok) values('$namabarang','$deskripsi','$stok')");
    if($querybaru){
        header('location: index.php');
    } else{
        echo "GAGAL! Menambahkan barang";
        header('location: index.php');
    }
}

//Menambah barang masuk
if(isset($_POST['addkeluar'])){
    $barangmasuk = $_POST['barangmasuk'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstok = mysqli_query($connect,"SELECT * FROM stok WHERE idbarang='$barangmasuk'");
    $data = mysqli_fetch_array($cekstok);

    $stoksekarang = $data['stok'];
    $tambahstok = $stoksekarang-$qty;

    $querymasuk = mysqli_query($connect,"INSERT INTO keluar(idbarang, penerima, qty) value('$barangmasuk','$penerima', '$qty')");
    $updatemasuk = mysqli_query($connect, "UPDATE stok SET stok='$tambahstok' WHERE idbarang='$barangmasuk'");
    if($querymasuk&&$updatemasuk){
        header('location: keluar.php');
    } else{
        echo "GAGAL! Menambahkan barang";
        header('location: keluar.php');
    }
}

//Menambah barang masuk
if(isset($_POST['addmasuk'])){
    $barangmasuk = $_POST['barangmasuk'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstok = mysqli_query($connect,"SELECT * FROM stok WHERE idbarang='$barangmasuk'");
    $data = mysqli_fetch_array($cekstok);

    $stoksekarang = $data['stok'];
    $tambahstok = $stoksekarang+$qty;

    $querymasuk = mysqli_query($connect,"INSERT INTO masuk(idbarang, keterangan, qty) value('$barangmasuk','$penerima', '$qty')");
    $updatemasuk = mysqli_query($connect, "UPDATE stok SET stok='$tambahstok' WHERE idbarang='$barangmasuk'");
    if($querymasuk&&$updatemasuk){
        header('location: masuk.php');
    } else{
        echo "GAGAL! Menambahkan barang";
        header('location: masuk.php');
    }
}

?>