<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle advertenties - Marktplaats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-warning fs-3 text-uppercase" href="../">Marktplaats</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-3">
                <li class="nav-item">
                    <a class="btn btn-outline-warning fw-semibold px-3 py-2 rounded-pill" href="../contact/">
                        <i class="bi bi-info-circle me-1"></i> Over Ons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="../<?= $href ?>/">
                        <i class="bi bi-person-circle me-1"></i> <?= $loginbtn ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning text-white fw-bold px-3 py-2 rounded-pill shadow-sm" href="../plaats_advertentie/">
                        <i class="bi bi-plus-circle me-1"></i> Plaats advertentie
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <a href="../" class="btn btn-outline-secondary mb-4">&larr; Terug</a>
    <h1 class="fw-bold mb-4">Alle advertenties</h1>

    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" class="form-control form-control-lg" name="zoek" placeholder="Zoek op titel..." value="<?= htmlspecialchars($zoekterm) ?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning text-white fw-bold btn-lg w-100">
                <i class="bi bi-search me-1"></i> Zoeken
            </button>
        </div>
    </form>

    <?php if (count($producten) > 0): ?>
    <div class="row g-4">
        <?php foreach ($producten as $product): ?>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="../<?= htmlspecialchars($product['photo']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['title']) ?>" style="height: 220px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><?= htmlspecialchars($product['title']) ?></h5>
                    <p class="card-text text-muted small"><?= htmlspecialchars(substr($product['bio'], 0, 120)) ?><?= strlen($product['bio']) > 120 ? '...' : '' ?></p>
                    <p class="card-text fw-bold text-warning fs-5 mt-auto">&euro;<?= number_format($product['price'], 2, ',', '.') ?></p>
                    <p class="card-text"><small class="text-body-secondary">Geplaatst door <?= htmlspecialchars($product['plaatser']) ?></small></p>
                    <a href="../detail/?id=<?= $product['id'] ?>" class="btn btn-outline-warning w-100 mt-2">Bekijk</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
    <div class="text-center py-5">
        <p class="text-muted fs-5">Geen advertenties gevonden<?= $zoekterm !== '' ? ' voor "' . htmlspecialchars($zoekterm) . '"' : '' ?>.</p>
    </div>
    <?php endif; ?>
</div>

</body>
</html>
