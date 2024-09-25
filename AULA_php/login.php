<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<h2>Login</h2>
    <form action="verifica_login.php" method="GET">

        <input type="text" id="login" name="login" placeholder="Login(e-mail)" required><br><br>

        <label for="semha">senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>