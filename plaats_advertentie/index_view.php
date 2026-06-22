<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertentie plaatsen</title>
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
                    <a class="nav-link text-dark fw-semibold" href="../contact/">
                        <i class="bi bi-info-circle me-1"></i> Over Ons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="../account/">
                        <i class="bi bi-person-circle me-1"></i> <?= htmlspecialchars($_SESSION['user']) ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4 fw-bold">Plaats advertentie</h2>

                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <?php if (isset($success)): ?>
                        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                    <?php endif; ?>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Titel</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label fw-semibold">Foto</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label fw-semibold">Beschrijving</label>
                            <textarea class="form-control" id="bio" name="bio" rows="4" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="form-label fw-semibold">Prijs (&euro;)</label>
                            <input type="number" step="0.01" min="0.01" class="form-control" id="price" name="price" required>
                        </div>

                        <button type="submit" class="btn btn-warning text-white fw-bold w-100 py-2">
                            <i class="bi bi-plus-circle me-1"></i> Plaats advertentie
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
