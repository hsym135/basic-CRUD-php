<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}

if (isset($_POST["edit"])) {
    if (tambahUser($_POST) > 0 ) {
        echo "
        <script type='text/javascript'>
            alert('yay, Data berhasil ditambahkan');
            window.location = 'user.php';
        </script>
        ";
    }else {
        echo "
        <script type='text/javascript'>
            alert('yah, Data gagal ditambahkan');
            window.location = 'user.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
</head>
<body>


    <div class="content">
        <h3>Tambah Data User - Toko Printer Renday</h3>
        <form method="POST">
            <input type="hidden" name="id_user" >
            <label for="username">username</label><br>
            <input type="text" name="username" id="username" class="form-control" ><br><br>

            <label for="nama_lengkap">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" ><br><br

            <label for="password">password</label><br>
            <input type="password" name="password" id="password" class="form-control" ><br><br>

            <label for="roles">roles</label><br>
            <select name="roles" class="form-control" >
                <option value="Admin">Admin</option>
                <option value="Customer">Customer</option>
            </select><br><br>
            
            <button type="submit" name="edit">Tambah</button>
        </form>
        
        
    </div>

    <a href="../logout.php" onClick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
</body>
</html>