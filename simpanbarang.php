<?php
    include('koneksi.php');
    $sql = "INSERT INTO barang (kode_barang, nama_barang, jumlah, harga_beli, harga_jual) 
    VALUES ('$_POST[kode_barang]', '$_POST[nama_barang]', '$_POST[jumlah]', '$_POST[harga_beli]', '$_POST[harga_jual]')";

    $query = mysqli_query($konek, $sql);
    if($query) {    
        echo "Data berhasil dimasukkan";
    }else{
        echo "Data gagal dimasukkan";
    }
?>