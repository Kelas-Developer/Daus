<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $nama_db= "crud_firdaus";
    $koneksi= mysqli_connect($host,$user,$pass,$nama_db);

    if(!$koneksi){
        die ("koneksi dengan database gagal: ".mysqli_connect_error());
    }
?>
