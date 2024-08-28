<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/stylesignup.css">
</head>
<body>
    <div class="login">
        <form action="prosesregister.php" method="post">
            <h1>Sign Up</h1>
            <table>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="no_hp" placeholder="No HP"></td>
                </tr>
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
                    <td><button type="submit" name="register" value="register" class="btn-checkout">Register</button></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="2" class="keterangan">Sudah Punya Akun?  <a href="login.php" class="signup">Login</a> </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>