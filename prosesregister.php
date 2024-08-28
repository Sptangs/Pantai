<?php
    include 'config/classDB.php';
    if(isset($_POST['register'])){
        extract($_POST);
        $pass = md5($password);
        $ins  = $dbo->insert("tblpelanggan","null, '$nama_pelanggan', '$alamat', '$no_hp', '$username', '$pass', '1'" );
        if($ins){
            ?>
                <script>
                    alert('register berhasil silahkan login');
                    location.href = 'login.php';
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert('register gagal coba lagi');
                    location.href = 'register.php';
                </script>
            <?php
        }

    }
?>