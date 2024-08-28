<?php
    session_start();
    include 'config/config.php'
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
        <div class="login">
            <form action="proseslogin.php" method="post">
                <h1>Login</h1>
                <table>
                    <tr>
                        <td></td>
                        <td><input type="text" name="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><button type="submit" class="btn-chekcout" name="login" value="login">Login</button></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="2" class="keterangan">Belum Punya Akun? <a href="register.php" class="signup">Sign Up</a> </td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>