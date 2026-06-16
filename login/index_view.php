<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>

    </head>
<body>
<div class="container">
<?= $show ?>
<input type="checkbox" onclick="showPasw()">Show Password
<hr>

<form action="" method="post">
    <?= $knop_extra ?>
    <input type="submit" name="wissel_knop" class="knop" value="<?= $knoptxt ?>">
</form>
</div>

</body>
</html>