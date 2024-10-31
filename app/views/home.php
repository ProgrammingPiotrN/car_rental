<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wypożyczalnia samochodów</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/app/assets/css/styles.css">
</head>

<body>
<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="/app/assets/images/logo/logo.jpg" alt="Logo Wypożyczalni" width="80" class="me-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Auta bez rezerwacji</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rezerwacja</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container h-75 d-flex align-items-center justify-content-center">
    <div class="row text-center">
        <h1 class="text-white fw-bold">Wypożyczalnia samochodów</h1>
        <div class="row mt-5 justify-content-center">
            <div class="d-flex justify-content-center flex-wrap">
                <button class="btn btn-outline-light flex-grow-1 m-2 fw-bold" style="max-width: 200px;">OFERTA</button>
                <button class="btn btn-outline-light flex-grow-1 m-2 fw-bold" style="max-width: 200px;">Rezerwacja</button>
            </div>
        </div>
    </div>
</div>


</header>
<!-- End Header -->

<!-- Available Cars Section -->
<section id="available">
    <div class="container-fluid p-5">
        <h1 class="text-center p-5">Dostępne samochody</h1>
        <div class="row">
            <?php if (isset($vehicles['available']) && is_array($vehicles['available'])) : ?>
                <?php foreach ($vehicles['available'] as $vehicle) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                        <div class="card">
                            <img src="/app/assets/images/samochody/<?= htmlspecialchars($vehicle['image']) ?>" 
                                 class="card-img-top img-fluid" alt="<?= htmlspecialchars($vehicle['model']) ?>">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= htmlspecialchars($vehicle['model']) ?></h5>
                                <p class="text-center"><?= htmlspecialchars($vehicle['type']) ?></p>
                                <p class="text-center fw-bold"><?= htmlspecialchars($vehicle['price_per_hour']) ?> zł/h</p>
                                <a href="#" class="btn btn-primary col-12">ZAREZERWUJ</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-center">Brak dostępnych samochodów</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Available Cars Section -->

<!-- Unavailable Cars Section -->
<section id="unavailable">
    <div class="container-fluid p-5">
        <h1 class="text-center p-5">Zarezerwowane samochody</h1>
        <div class="row">
            <?php if (isset($vehicles['reserved']) && is_array($vehicles['reserved'])) : ?>
                <?php foreach ($vehicles['reserved'] as $vehicle) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                        <div class="card">
                            <img src="/app/assets/images/samochody/<?= htmlspecialchars($vehicle['image']) ?>" 
                                 class="card-img-top img-fluid" alt="<?= htmlspecialchars($vehicle['model']) ?>">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= htmlspecialchars($vehicle['model']) ?></h5>
                                <p class="text-center"><?= htmlspecialchars($vehicle['type']) ?></p>
                                <p class="text-center fw-bold"><?= htmlspecialchars($vehicle['price_per_hour']) ?> zł/h</p>
                                <button class="btn btn-danger col-12" disabled>
                                    DOSTĘPNY OD <?= htmlspecialchars($vehicle['available_date']) ?>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-center">Brak zarezerwowanych samochodów</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Unavailable Cars Section -->

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<!-- End JavaScript -->
</body>
</html>
