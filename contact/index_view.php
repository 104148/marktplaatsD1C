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
            <img src="../src/kyano.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kyano</h5>
              <p class="card-text">Ik ben Kyano, 17 jaar en ben dol op back-end van php. voor dit project heb ik mij gespecialiseert op het account managment en login systeem.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../src/brayston.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Brayston</h5>
              <p class="card-text">Ik ben Brayston, 17 jaar en ben een van de back-end devlopers van deze php marktplaats project. Mijn taak was de detail pagina e de posting regelen.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../src/justin.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Justin</h5>
              <p class="card-text">Mijn taak is front-end. ik werk vooral met html,js en css. ik bedenk hoe het lay-out uit ziet in team. </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../src/gijs.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gijs</h5>
              <p class="card-text">Ik ben Gijs mulder, ik ben 17 jaar oud en ik was beig met het helpen bedenken van ideeen en het werken aan front end delen zoals de layout van de main page, de over ons en de inlog paginas</p>
            </div>
          </div>
        </div>
</body>
</html>