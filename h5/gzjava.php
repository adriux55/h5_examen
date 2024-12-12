<?php
// Define page metadata and configuration
$pageTitle = "GeekZone";
$pageDescription = "Tienda de juegos de mesa y entretenimiento";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="geekstyle.css">
    <?php
    // Banner image with PHP variable for potential dynamic replacement
    $bannerImage = "img/GeekZone Banner.png";
    ?>
    <img src="<?php echo $bannerImage; ?>" class="wrapper img-fluid" alt="GeekZone Banner">
</head>

<body>
    <?php
    // Navigation menu items
    $menuItems = [
        ['href' => './gzcata.php', 'text' => 'Catalogo'],
        ['href' => './gzgen.php', 'text' => 'Géneros'],
        ['href' => './gzfaq.php', 'text' => 'FAQ'],
        ['href' => './gzcont.php', 'text' => 'Contactenos']
    ];
    ?>
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

    <?php
    // Advanced Games Carousel Items
    $carouselItems = [
        [
            'image' => 'img/Juegos/Nemesis.png', 
            'alt' => 'Nemesis', 
            'title' => 'NEMESIS', 
            'description' => '¿Podrás sobrevivir el vacio del espacio?'
        ],
        [
            'image' => 'img/Juegos/Uno.jpg', 
            'alt' => 'Uno', 
            'title' => 'UNO', 
            'description' => 'Se el primero en deshacerte de tus cartas.'
        ],
        [
            'image' => 'img/Juegos/Scrabble.jpg', 
            'alt' => 'Scrabble', 
            'title' => 'SCRABBLE', 
            'description' => 'Cada letra cuenta.'
        ]
    ];
    ?>

    <br>
    <h2 class="carb">JUEGOS AVANZADOS</h2>
    <div id="carouselExampleCaptions" class="carousel slide bordb">
        <div class="col-md-12">
            <div class="carousel-indicators">
                <?php foreach(array_keys($carouselItems) as $index): ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $index; ?>" 
                    class="<?php echo $index === 0 ? 'active' : ''; ?>"
                    aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" 
                    aria-label="Slide <?php echo $index + 1; ?>"></button>
                <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
                <?php foreach($carouselItems as $index => $item): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $item['image']; ?>" class="d-block w-100 cent" alt="<?php echo $item['alt']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="carb"><?php echo $item['title']; ?></h2>
                        <p class="carb"><?php echo $item['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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

<?php
// Footer Social Media Links
$socialLinks = [
    ['href' => 'https://www.facebook.com/GeekzoneBolivia', 'icon' => 'bi-facebook', 'text' => 'Facebook'],
    ['href' => 'https://www.instagram.com/geekzonebolivia/', 'icon' => 'bi-instagram', 'text' => 'Instagram'],
    ['href' => 'https://www.tiktok.com/@geekzonebolivia', 'icon' => 'bi-tiktok', 'text' => 'TikTok']
];
?>
<br>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a style="color: white" class="nav-link" href="./index.php"><img src="img/Logo GeekZone.png" class="img-fluid"></a>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col">
                        <a class="nav-link" href="./gznos.php">Sobre Nosotros</a>
                    </div>
                    <div class="col">
                        <a class="nav-link" href="<?php echo $socialLinks[0]['href']; ?>">
                            <i class="bi <?php echo $socialLinks[0]['icon']; ?>"></i> <?php echo $socialLinks[0]['text']; ?>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="nav-link" href="./gzcont.php">Contactenos</a>
                    </div>
                    <div class="col">
                        <a class="nav-link" href="<?php echo $socialLinks[1]['href']; ?>">
                            <i class="bi <?php echo $socialLinks[1]['icon']; ?>"></i> <?php echo $socialLinks[1]['text']; ?>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="nav-link" href="./gzfaq.php">FAQ</a>
                    </div>
                    <div class="col">
                        <a class="nav-link" href="<?php echo $socialLinks[2]['href']; ?>">
                            <i class="bi <?php echo $socialLinks[2]['icon']; ?>"></i> <?php echo $socialLinks[2]['text']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>