<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Account pagina: <?= $_SESSION['user'] ?></h1>
    <form action="../login/logout.php">
    <button type="submit" class="logout">Log uit</button>
</form>
</body>
</html>