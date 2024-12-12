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
          <li class="nav-item">
            <a class="nav-link" href="./gzcata.php">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./gzgen.php">Géneros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./gzfaq.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./gzcont.php">Contactenos</a>
          </li>
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
  <div class="container">
    <h2 class="carb">GÉNEROS</h2>
    <!-- Aquí puedes agregar el contenido de los géneros -->
  </div>
</body>
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
            <a class="nav-link" href="https://www.facebook.com/GeekzoneBolivia"><i class="bi bi-facebook"></i> Facebook</a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a class="nav-link" href="./gzcont.php">Contactenos</a>
          </div>
          <div class="col">
            <a class="nav-link" href="https://www.instagram.com/geekzonebolivia/"><i class="bi bi-instagram"></i> Instagram</a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a class="nav-link" href="./gzfaq.php">FAQ</a>
          </div>
          <div class="col">
            <a class="nav-link" href="https://www.tiktok.com/@geekzonebolivia"><i class="bi bi-tiktok"></i> TikTok</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</html>