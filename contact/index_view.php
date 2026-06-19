<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
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
                    <!-- <li class="nav-item">
                        <a class="btn btn-outline-warning fw-semibold px-3 py-2 rounded-pill" href="./contact/">
                            <i class="bi bi-info-circle me-1"></i> Over Ons
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold" href="../<?= $href ?>/">
                            <i class="bi bi-person-circle me-1"></i> <?= $loginbtn ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning text-white fw-bold px-3 py-2 rounded-pill shadow-sm" href="#">
                            <i class="bi bi-plus-circle me-1"></i> Plaats advertentie
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="../src/filler.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kyano</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../src/filler.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Brayston</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../src/filler.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Justin</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../src/filler.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gijs</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>