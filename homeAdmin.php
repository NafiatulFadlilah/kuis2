<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Home Admin</title>
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
                    echo "<h2>Selamat datang " . $_SESSION["username"] . "</h2>" . "<br>";
                }else{
                    header("Location:home.php");
                }
            ?>
            <div align = "right"><a href="insertBuku.php"><button>Tambah Data Buku</button></a><br><br></div>
            <table>
                <tr>
                    <th> Kode Buku </th>
                    <th> Judul </th>
                    <th> Pengarang </th>
                    <th></th>
                </tr>
                <?php
                    include "connection.php";

                    $query = "SELECT * FROM buku";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $row["id_buku"]; ?> </td>
                    <td> <?php echo $row["judul"]; ?> </td>
                    <td> <?php echo $row["pengarang"]?> </td>
                    <td> 
                        <a href="detailBukuAdmin.php?id_buku=<?php echo $row["id_buku"]; ?>"><button>detail</button></a>
                        <a href="editBuku.php?id_buku=<?php echo $row["id_buku"]; ?>"><button>edit</button></a>
                        <a href="deleteBuku.php?id_buku=<?php echo $row["id_buku"]; ?>"><button>delete</button></a>
                    </td>
                </tr>
                <?php
                        }
                    }else{
                        echo "0 results";
                    }
                ?>
            </table>
        </div>
        <div id="footer">
            <div class="wrapper">
                Copyright &copy; 2022
            </div>
        </div>
    </body>
</html>