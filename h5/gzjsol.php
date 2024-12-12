<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekZone</title>
    <link rel="stylesheet" href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="geekstyle.css">
    <img src="img/GeekZone Banner.png" class="wrapper img-fluid" alt="GeekZone Banner">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark menu">
        <div class="container-fluid wrapper">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach($menuItems as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item['href']; ?>"><?php echo $item['text']; ?></a>
                    </li>
                    <?php endforeach; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./gzcont.php"><i class="bi bi-whatsapp"></i></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <a href="cart.php" class="btn btn-outline-light ms-3">
                    <i class="bi bi-cart"></i> Carrito
                    <?php
                    session_start();
                    if (isset($_SESSION['cart'])) {
                        $totalItems = array_sum($_SESSION['cart']);
                        echo "($totalItems)";
                    }
                    ?>
                </a>
            </div>
        </div>
    </nav>
    <br>
    <h2 class="cary">JUEGOS DE UN SOLO JUGADOR</h2>
    <div id="carouselExampleCaptions" class="carousel slide bordy">
        <div class="col-md-12">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Juegos/Arkham Horror.png" class="d-block w-100 cent" alt="Arkham Horror">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="cary">ARKHAM HORROR</h2>
                        <p class="cary">Experimenta una auténtica aventura lovecraftiana.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Juegos/Uno.jpg" class="d-block w-100 cent" alt="Uno">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="cary">ARKHAM HORROR</h2>
                        <p class="cary">Se el primero en deshacerte de tus cartas.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Juegos/Scrabble.jpg" class="d-block w-100 cent" alt="Scrabble">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="cary">SCRABBLE</h2>
                        <p class="cary">Cada letra cuenta.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
<br>
<footer>
    <div class="row">
        <div class="col-sm-3">
            <a style="color: white" class="nav-link" href="./index.php"><img src="img/Logo GeekZone.png"></a>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col">
                    <a class="nav-link" href="./gznos.php">Sobre Nosotros</a>
                </div>
                <div class="col">
                    <a class="nav-link" href="https://www.facebook.com/GeekzoneBolivia"><i class="bi bi-facebook"></i>
                        Facebook</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="nav-link" href="./gzcont.php">Contactenos</a>
                </div>
                <div class="col">
                    <a class="nav-link" href="https://www.instagram.com/geekzonebolivia/"><i
                            class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="nav-link" href="./gzfaq.php">FAQ</a>
                </div>
                <div class="col">
                    <a class="nav-link" href="https://www.tiktok.com/@geekzonebolivia"><i class="bi bi-tiktok"></i>
                        TikTok</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>