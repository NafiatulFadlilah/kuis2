<?php
    include "connection.php";

    $id_buku = $_POST["idbuku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $deskripsi = $_POST["deskripsi"];

    $query= "INSERT INTO buku VALUE ('$id_buku', '$judul', '$pengarang', '$penerbit', '$deskripsi')";

    if(mysqli_query($connect, $query)){
        header("Location:homeAdmin.php");
    }else{
        echo "Data baru gagal ditambahkan <br>" .  mysqli_error($connect);
    }

    mysqli_close($connect); 
?>