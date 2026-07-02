<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <div class="container py-4">
        <h1>Welkom in het Admin Dashboard</h1>
        
        <h2 class="mt-4">Huidige Invite Code: <span class="text-muted"><?php echo htmlspecialchars($invite_code); ?></span></h2>

        <h3 class="mt-5">Gebruikers</h3>
        <table class="table table-bordered">
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

        <h3 class="mt-5">Advertenties</h3>
        <?php if (count($producten) > 0): ?>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Prijs</th>
                <th>Geplaatst door</th>
                <th>Datum</th>
                <th>Actie</th>
            </tr>
            <?php foreach ($producten as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= htmlspecialchars($p['title']) ?></td>
                <td>&euro;<?= number_format($p['price'], 2, ',', '.') ?></td>
                <td><?= htmlspecialchars($p['plaatser']) ?></td>
                <td><?= date('d-m-Y', strtotime($p['created_at'])) ?></td>
                <td>
                    <a href="?delete_id=<?= $p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Weet je zeker dat je deze advertentie wilt verwijderen?')">
                        <i class="bi bi-trash"></i> Verwijderen
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <p class="text-muted">Nog geen advertenties.</p>
        <?php endif; ?>

        <form action="../login/logout.php" class="mt-4">
            <button type="submit" class="btn btn-secondary">Log uit</button>
        </form>
    </div>
</body>
</html>
>>>>>>> main
