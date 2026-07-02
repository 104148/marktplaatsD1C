<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f6f6f6;
            font-family: Arial, sans-serif;
        }
        /* 让左侧菜单的激活项变成和你们之前一样的黄色 */
        .list-group-item.active {
            background-color: #f59e0b !important;
            border-color: #f59e0b !important;
        }
    </style>
</head>
<body>
 
<nav class="navbar navbar-light bg-white border-bottom py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-warning fs-3" href="../">MARKTPLAATS</a>
        <a class="btn btn-outline-secondary btn-sm" href="../">Home</a>
    </div>
</nav>
 
<main class="container my-5">
    <div class="row">
        
        <div class="col-md-3 mb-4">
            <div class="card p-3 bg-white mb-3 text-center">
                <h5 class="fw-bold mb-1"><?= $_SESSION["user"] ?></h5>
            </div>
 
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Mijn Advertenties</a>
                <a href="#" class="list-group-item list-group-item-action">Berichten</a>
                <a href="#" class="list-group-item list-group-item-action">Favorieten</a>
                <a href="#" class="list-group-item list-group-item-action text-danger">Uitloggen</a>
            </div>
        </div>
 
        <div class="col-md-9">
            <div class="card p-4 bg-white">
                <h3 class="fw-bold mb-4">Mijn Advertenties</h3>
 
                <div class="card p-3">
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <img src="images/product1.webp" alt="Yacht" class="img-fluid rounded">
                        </div>
                        <div class="col-6 col-md-7">
                            <h5 class="fw-bold mb-1">YACHT</h5>
                            <p class="text-warning fw-bold mb-0">€ 2.000.000.000</p>
                        </div>
                        <div class="col-3 col-md-3 text-end">
                            <button class="btn btn-sm btn-outline-danger">Verwijderen</button>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        
    </div>
</main>
 
<footer class="bg-white border-top text-center py-4 text-muted">
    <div class="container">
        <p class="mb-0">© 2026 Marktplaats Groepsproject</p>
    </div>
</footer>
 
</body>
</html>