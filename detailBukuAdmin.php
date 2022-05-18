<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Detail Buku Admin</title>
        <link rel="stylesheet" type= "text/css" href="style.css">
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <div class="logo"><a href=''>Toko Buku Orion</a></div>
                <div class="menu">
                    <ul>
                        <li><a href="homeAdmin.php">CRUD</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="container">
            <?php
                if(isset($_SESSION["username"])){
                    echo "<h2>Detail Buku</h2>". "<br>";
                }else{
                    header("Location:home.php");
                }
            ?>
            <?php
                include "connection.php";

                $id_buku = $_GET["id_buku"];
                $query = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
                $result = mysqli_query($connect, $query);
            ?>
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Kode Buku</td>
                    <td> <?php echo $row["id_buku"]; ?> </td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td> <?php echo $row["judul"]; ?> </td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td> <?php echo $row["pengarang"]; ?> </td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td> <?php echo $row["penerbit"]; ?> </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td> <?php echo $row['deskripsi']; ?> </td>
                </tr>
            <?php
                }
            ?>
            </table><br>
            <a href="homeAdmin.php"><button>Kembali</button></a>
        </div>
        <div id="footer">
            <div class="wrapper">
                Copyright &copy; 2022
            </div>
        </div>
    </body>
</html>