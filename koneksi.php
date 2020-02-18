<?php

$connect = mysqli_connect( "localhost","root","","restoran");
    if(mysqli_connect_errno()){
        print "koneksi gagal : " . mysqli_connect_error(); 
    }
?>
