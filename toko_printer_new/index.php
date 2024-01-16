<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Customer</title>
    <style>
        .nav{
            display: flex;
            list-style: none;
            justify-content: space-around;
        }
        a{
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
    <div class="nav">
        <p>Halaman Customer</p>
        <?php if( !isset($_SESSION['username']) ){ //jika tidak ada yang login ?>

        <div class="menu">
        <li><a href="auth/login/index.php"> Login</a></li>
        <li><a href="auth/register/index.php"> Register</a></li></div>

        <?php  }else{  //jika ada yang login ?>
        <div class="menu">
        <li><a href="index.php">Selamat Datang <?= $_SESSION['username']?></a></li>
        <li><a href="logout.php">Logout</a></li></div>

    <?php   } ?>
    </div> 
</body>
</html>