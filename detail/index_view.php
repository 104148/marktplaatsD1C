<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['title']) ?> - Marktplaats</title>
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

    <div class="row g-5">
        <div class="col-md-7">
            <img src="../<?= htmlspecialchars($product['photo']) ?>" class="img-fluid rounded shadow" alt="<?= htmlspecialchars($product['title']) ?>" style="width: 100%; max-height: 500px; object-fit: cover;">
        </div>
        <div class="col-md-5">
            <h1 class="fw-bold display-6"><?= htmlspecialchars($product['title']) ?></h1>
            <p class="text-warning fw-bold fs-2">&euro;<?= number_format($product['price'], 2, ',', '.') ?></p>
            <hr>
            <h5 class="fw-semibold">Beschrijving</h5>
            <p class="text-muted"><?= nl2br(htmlspecialchars($product['bio'])) ?></p>
            <hr>
            <p class="text-muted small">
                <i class="bi bi-person-circle me-1"></i> Geplaatst door <strong><?= htmlspecialchars($product['plaatser']) ?></strong><br>
                <i class="bi bi-calendar me-1"></i> <?= date('d-m-Y', strtotime($product['created_at'])) ?>
            </p>
            <button type="button" class="btn btn-success w-100 py-2 mt-3" onclick="alert('Bied functie komt binnenkort!')">
                <i class="bi bi-hammer me-1"></i> Bieden
            </button>
        </div>
    </div>
</div>

</body>
</html>
