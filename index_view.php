<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main_page_style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning fs-3 text-uppercase" href="../">Marktplaats</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item">
                        <a class="btn btn-outline-warning fw-semibold px-3 py-2 rounded-pill" href="./contact/">
                            <i class="bi bi-info-circle me-1"></i> Over Ons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold" href="./<?= $href ?>/">
                            <i class="bi bi-person-circle me-1"></i> <?= $loginbtn ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning text-white fw-bold px-3 py-2 rounded-pill shadow-sm" href="./plaats_advertentie/">
                            <i class="bi bi-plus-circle me-1"></i> Plaats advertentie
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 


<header>
    <div class="text-center">
        <img class="d-block mx-auto mb-4" src="/src/hero_boat.png" alt="" width="70%" height="auto">
        <div class="col-lg-6 mx-auto">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="./advertenties/" class="btn btn-primary btn-lg px-4 gap-3">Bekijk alle advertenties</a>
            </div>
        </div>
    </div>
</header>
<div>
    <p style="color: white;">d</p>
</div>

<?php if (count($producten) > 0): ?>
<div class="container my-5">
    <h2 class="fw-bold mb-4">Recent toegevoegd</h2>
    <div class="row g-4">
        <?php foreach ($producten as $product): ?>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="<?= htmlspecialchars($product['photo']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['title']) ?>" style="height: 220px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><?= htmlspecialchars($product['title']) ?></h5>
                    <p class="card-text text-muted small"><?= htmlspecialchars(substr($product['bio'], 0, 120)) ?><?= strlen($product['bio']) > 120 ? '...' : '' ?></p>
                    <p class="card-text fw-bold text-warning fs-5 mt-auto">&euro;<?= number_format($product['price'], 2, ',', '.') ?></p>
                    <p class="card-text"><small class="text-body-secondary">Geplaatst door <?= htmlspecialchars($product['plaatser']) ?></small></p>
                    <a href="detail/?id=<?= $product['id'] ?>" class="btn btn-outline-warning w-100 mt-2">Bekijk</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php else: ?>
<div class="container my-5 text-center">
    <p class="text-muted fs-5">Nog geen advertenties. Wees de eerste!</p>
</div>
<?php endif; ?>

<div class="container my-5">
    <h2 class="fw-bold mb-4">Uitgelichte items</h2>
</div>
<div class="grid-container">
    <?php if (count($grid_producten) > 0): ?>
        <?php foreach ($grid_producten as $g): ?>
        <div class="item" style="background-image: url('<?= htmlspecialchars($g['photo']) ?>'); background-size: cover; background-position: center; position: relative;">
            <a href="detail/?id=<?= $g['id'] ?>" style="position: absolute; inset: 0; display: flex; align-items: flex-end; justify-content: center; text-decoration: none; background: linear-gradient(transparent 60%, rgba(0,0,0,0.7)); color: white; padding: 15px; font-weight: bold; font-size: 1.1rem;">
                <?= htmlspecialchars($g['title']) ?> - &euro;<?= number_format($g['price'], 2, ',', '.') ?>
            </a>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
    <?php endif; ?>
</div>

<div class="container"> <footer class="py-3 my-4"> <ul class="nav justify-content-center border-bottom pb-3 mb-3"> <li class="nav-item"><a href="./" class="nav-link px-2 text-body-secondary">Home</a></li> <li class="nav-item"><a href="/plaats_advertentie/" class="nav-link px-2 text-body-secondary">Plaats advertentie</a></li> <li class="nav-item"><a href="/contact/" class="nav-link px-2 text-body-secondary">About us</a></li> </ul> <p class="text-center text-body-secondary">© 2025 Company, Inc</p> </footer> </div>

<section></section>
<footer></footer>
</body>
</html>
