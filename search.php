<!DOCTYPE HTML>
<html>
    <head>
        <title>Search</title>
        <link rel="stylesheet" type= "text/css" href="style.css">
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <div class="logo"><a href=''>Toko Buku Orion</a></div>
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="loginForm.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="container">
            <h2>Hasil Pencarian Judul Buku</h2><br>
            <table>
                <tr>
                    <th> Kode Buku </th>
                    <th> Judul </th>
                    <th> Pengarang </th>
                    <th></th>
                </tr>
                <?php
                    $judul = $_GET["carijudul"];
                    include "connection.php";

                    $query = "SELECT * FROM buku WHERE judul LIKE '%$judul%'";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $row["id_buku"]; ?> </td>
                    <td> <?php echo $row["judul"]; ?> </td>
                    <td> <?php echo $row["pengarang"]?> </td>
                    <td> <a href="detailBuku.php?id_buku=<?php echo $row["id_buku"]; ?>"><button>detail</button></a></td>
                </tr>
                <?php
                        }
                    }else{
                        echo "0 results";
                    }
                ?>
            </table><br>
            <a href="home.php"><button>Kembali ke Home</button></a>
        </div>
        <div id="footer">
            <div class="wrapper">
                Copyright &copy; 2022
            </div>
        </div>
    </body>
</html>