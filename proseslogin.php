<?php
session_start();
// include "config/config.php";

include "config/classDB.php";


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $hasil = $dbo->select("tblpelanggan where username='$username' and password='$password'"); 
    $result = count($hasil);    
    if ($result > 0) {

        $_SESSION['iduser'] = $row['idpelanggan'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['namapelanggan'] = $row['nama_pelanggan'];
    ?>
        <script>
            location.href = 'index.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('salah')
        </script>
<?php

    }
}
?>


<!--  -->