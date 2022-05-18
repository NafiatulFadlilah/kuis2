<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type= "text/css" href="styleLogin.css">
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <div class="logo"><a href=''>Toko Buku Orion</a></div>
            </div>
        </nav>
        <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            }else{
                $error = "";
            }

            $message = "";
            if($error == "gagal"){
                $message = "Gagal login, silakan coba kembali";
            }
        ?>
        <div id="container">
            <p style="color: red"><?php echo $message; ?> </p>
            <div class =kotak>
                <form action="loginProcess.php" method="post"> 
                    <table cellspacing= 5>
                        <tr>
                            <td>&nbsp;</td>
                            <td> <p>Mohon login terlebih dahulu</p></td>
                        </tr>
                        <tr>
                            <td>username</td>
                            <td><input type="text" name="username" size="20"></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="password" name="password" size="20"></td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp;</td>
                            <td><input type="submit" name="login" value="LOGIN"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div id="footer">
            <div class="wrapper">
                Copyright &copy; 2022
            </div>
        </div>
    </body>
</html>