<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <h1>Welkom in het Admin Dashboard</h1>
    
    <h2>Huidige Invite Code: <?php echo htmlspecialchars($invite_code); ?></h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Gebruiker</th>
            <th>Admin status</th>
        </tr>
        <?php foreach ($gebruikers as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo htmlspecialchars($user['user']); ?></td>
            <td><?php echo ($user['admin'] == 1) ? 'Admin' : 'Gebruiker'; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<form action="../login/logout.php">
    <button type="submit" class="logout">Log uit</button>
</form>

</body>
</html>
