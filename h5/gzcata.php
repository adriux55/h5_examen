<?php
session_start();

function addToCart($productId) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (!isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = 1;
    } else {
        $_SESSION['cart'][$productId]++;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    addToCart($_POST['product_id']);
}
?>
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
          if (isset($_SESSION['cart'])) {
              $totalItems = array_sum($_SESSION['cart']);
              echo "($totalItems)";
          }
          ?>
        </a>
      </div>
    </div>
  </nav>
  <div class="container my-5">
    <h2>Catálogo de Productos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $products = [
          1 => ['name' => 'Arkham Horror', 'image' => 'img/juegos/Arkham Horror.png', 'description' => 'Juego de terror y misterio ambientado en el universo de H.P. Lovecraft.'],
          2 => ['name' => 'Dungeons and Dragons', 'image' => 'img/juegos/Dungeons and Dragons.png', 'description' => 'Juego de rol de fantasía épica con múltiples aventuras y personajes.'],
          3 => ['name' => 'King of Tokyo', 'image' => 'img/juegos/King of Tokyo.png', 'description' => 'Juego de estrategia y control de área ambientado en Tokio.'],
          4 => ['name' => 'Monopoly', 'image' => 'img/juegos/Monopoly.jpg', 'description' => 'Clásico juego de compra y venta de propiedades.'],
          5 => ['name' => 'Nemesis', 'image' => 'img/juegos/Nemesis.png', 'description' => 'Juego de supervivencia y terror ambientado en el espacio.'],
          6 => ['name' => 'Uno', 'image' => 'img/juegos/Uno.jpg', 'description' => 'Clásico juego de cartas de emparejamiento de colores y números.'],
          7 => ['name' => 'Wavelength', 'image' => 'img/juegos/Wavelength.png', 'description' => 'Juego de adivinanzas y percepción de diferencias.']
      ];

      foreach ($products as $id => $product) {
          echo "<div class='col'>
                  <div class='card h-100'>
                    <img src='{$product['image']}' class='card-img-top' alt='{$product['name']}'>
                    <div class='card-body'>
                      <h5 class='card-title'>{$product['name']}</h5>
                      <p class='card-text'>{$product['description']}</p>
                      <form method='post'>
                          <input type='hidden' name='product_id' value='$id'>
                          <button type='submit' class='btn btn-primary'>Agregar al carrito</button>
                      </form>
                    </div>
                  </div>
                </div>";
      }
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>
</html>