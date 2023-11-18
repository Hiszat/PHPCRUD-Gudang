<?php
    $server ='localhost';
    $user = 'root';
    $password = '';
    $database = 'tokoonline';

    $konek = mysqli_connect($server, $user, $password, $database);
    if($konek){
        echo "Koneksi berhasil";
    }else{
        echo "Koneksi gagal";
    }
?>