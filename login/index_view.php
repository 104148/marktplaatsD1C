<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<form action="login.php" method="post">
    <h1>Login</h1>
<label for="user">Gebruikersnaam</label><br>
<input type="text" id="user" name="user"><br><br>


    <label for="password">Wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Verzenden">
</form>

<form action="register.php" method="post">
    <h1>Registreer</h1>
    <label for="user1">Gebruikersnaam</label><br>
    <input type="text" id="user1" name="user1"><br><br>


    <label for="password1">Wachtwoord:</label><br>
    <input type="password" id="password1" name="password1"><br><br>

    <input type="submit" value="Verzenden">
</form>

</body>
</html>