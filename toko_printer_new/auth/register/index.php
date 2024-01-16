<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
    
    <div class="kotak-register">
        <h3>Printer Renday</h3>
        <h4>Register your account</h4>

        <form action="process.php" method="POST">
            <label for="nama_lengkap">Nama Lengkap</label><br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br /><br />

            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" class="form-control"><br /><br />

            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="form-control"><br /> <br />

            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>