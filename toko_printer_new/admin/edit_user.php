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

if(isset($_POST["edit"])){
    if(editUser($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }
    } 

    $id = $_GET["id"];
    $user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data User</title>
</head>
<body>


    <div class="content">
        <h3>Edit Data user - Toko Printer</h3>
        <form method="POST">
            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">
            <label for="username">username</label><br>
            <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"]; ?>"><br><br>

            <label for="nama_lengkap">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"><br><br

            <label for="password">password</label><br>
            <input type="password" name="password" id="password" class="form-control" value="<?= $user["password"]; ?>"><br><br>

            <label for="roles">roles</label><br><br>
            <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="Customer">Customer</option>
            </select><br><br>
            
            <button type="submit" name="edit">edit</button>
        </form>
        
        
    </div>

    <a href="../logout.php" onClick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
</body>
</html>