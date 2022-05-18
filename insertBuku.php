<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Data Buku</title>
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
                    echo "<h2>Tambah Data Buku</h2>". "<br>";
                }else{
                    header("Location:home.php");
                }
            ?>
            <form action="insertProcess.php" method="post">
                <table>
                    <tr>
                        <td>Kode Buku: </td>
                        <td><input type="text" name="idbuku"> </td>
                    </tr>
                    <tr>
                        <td>Judul: </td>
                        <td><input type="text" name="judul"> </td>
                    </tr>
                    <tr>
                        <td>Pengarang: </td>
                        <td><input type="text" name="pengarang"> </td>
                    </tr>
                    <tr>
                        <td>Penerbit: </td>
                        <td><input type="text" name="penerbit"> </td>
                    </tr>
                    <tr>
                        <td>Deskripsi: </td>
                        <td><textarea name="deskripsi" cols="150" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="send" value="Tambah"> </td>
                    </tr>
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