<?php
    include "connection.php";

    $id_buku = $_POST["idbuku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $deskripsi = $_POST["deskripsi"];

    $query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', 
    deskripsi = '$deskripsi' WHERE id_buku = '$id_buku'";

    if(mysqli_query($connect, $query)){
        header("Location:homeAdmin.php");
    }else{
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>