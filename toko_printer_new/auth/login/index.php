<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    
    <div class="kotak-login">
        <h3>Printer Renday</h3>
        <h4>Login your account</h4>

        <form action="process.php" method="POST">
            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" class="form-control"><br /><br />

            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="form-control"><br /> <br />

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>