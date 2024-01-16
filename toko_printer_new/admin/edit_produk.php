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
    if(editProduk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data produk berhasil diubah');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
    } 

    $id = $_GET["id"];
    $produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
</head>
<body>


    <div class="content">
        <h3>Edit Data Produk - Toko Printer</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">
            <label for="nama_produk">Nama Produk</label><br>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $produk["nama_produk"]; ?>"><br><br>

            <label for="harga">Harga</label><br>
            <input type="number" name="harga" id="harga" class="form-control" value="<?= $produk["harga"]; ?>"><br><br>

            <label for="foto">Foto</label><br>
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $produk["foto"]; ?>"><br><br>

            <label for="stok">Stok</label><br>
            <input type="number" name="stok" id="stok" class="form-control" value="<?= $produk["stok"]; ?>"><br><br>

            <label for="deskripsi">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" ><?= $produk["deskripsi"];?></textarea><br><br>

            
            <button type="submit" name="edit">Edit</button>
        </form>
        
        
    </div>

    <a href="../logout.php" onClick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
</body>
</html>