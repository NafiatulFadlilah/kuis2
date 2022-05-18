<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Edit Data Buku</title>
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
                    echo "<h2>Edit Data Buku</h2>". "<br>";
                }else{
                    header("Location:home.php");
                }
            ?>
            <?php
                include "connection.php";

                $id_buku = $_GET['id_buku'];
                $query = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
                $result = mysqli_query($connect, $query); 
            ?>
            <form action="editProcess.php" method="post">
                <table>
                    <?php
                        while($row= mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td>Kode Buku: </td>
                        <td><input type="text" name="idbuku" value="<?php echo $row['id_buku']; ?>" readonly> </td>
                    </tr>
                    <tr>
                        <td>Judul: </td>
                        <td><input type="text" name="judul" value="<?php echo $row['judul']; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Pengarang: </td>
                        <td><input type="text" name="pengarang" value="<?php echo $row['pengarang']; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Penerbit: </td>
                        <td><input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Deskripsi: </td>
                        <td>
                            <textarea name="deskripsi" cols="150" rows="10"><?php echo $row["deskripsi"]; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="save" value="Simpan"> </td>
                        <td><div align="right"><a href="homeAdmin.php"><button>Kembali</button></a></div></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </form>
            
        </div>
        <div id="footer">
            <div class="wrapper">
                Copyright &copy; 2022
            </div>
        </div>
    </body>
</html>