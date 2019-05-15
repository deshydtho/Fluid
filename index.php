<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logo-512x512.png">
    <title>Fluid - Music streaming for everyone</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img src="img/logo-512x512.png" alt="Logo" style="width:40px">
            </a>
        </nav>
        <br><br><br>
    </header>
    <form action="loginhandler.php" method="POST">
        <p>Username</p><input type="text" name="user">
        <p>Password</p><input type="password" name="pass">
        <input type="submit" value="login">
    </form>
</body>
</html>