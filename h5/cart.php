<?php
session_start();

// Productos de ejemplo, reemplaza esto con tu lógica para obtener productos del catálogo
$products = [
    1 => ['name' => 'Arkham Horror', 'image' => 'img/juegos/Arkham Horror.png'],
    2 => ['name' => 'Dungeons and Dragons', 'image' => 'img/juegos/Dungeons and Dragons.png'],
    3 => ['name' => 'King of Tokyo', 'image' => 'img/juegos/King of Tokyo.png'],
    4 => ['name' => 'Monopoly', 'image' => 'img/juegos/Monopoly.jpg'],
    5 => ['name' => 'Nemesis', 'image' => 'img/juegos/Nemesis.png'],
    6 => ['name' => 'Uno', 'image' => 'img/juegos/Uno.jpg'],
    7 => ['name' => 'Wavelength', 'image' => 'img/juegos/Wavelength.png']
];

$orderSuccess = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'finalizar') {
    // Vaciar el carrito
    unset($_SESSION['cart']);
    $orderSuccess = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="geekstyle.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary menu">
    <div class="container-fluid wrapper">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="./gzcata.php">Catalogo</a>
          </li>
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="./gzgen.php">Géneros</a>
          </li>
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="./gzfaq.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="./gzcont.php">Contactenos</a>
          </li>
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="./gzcont.php"><i class="bi bi-whatsapp"></i></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button style="color: white" class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
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
    <h1>Carrito de Compras</h1>
    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<ul class='list-group'>";
        foreach ($_SESSION['cart'] as $productId => $quantity) {
            $product = $products[$productId];
            echo "<li class='list-group-item d-flex align-items-center'>
                    <img src='{$product['image']}' alt='{$product['name']}' class='img-thumbnail' style='width: 50px; height: 50px; margin-right: 10px;'>
                    <span>{$product['name']} - Cantidad: $quantity</span>
                  </li>";
        }
        echo "</ul>";
        echo "<form method='post' class='mt-3'>
                <input type='hidden' name='action' value='finalizar'>
                <button type='submit' class='btn btn-success'>Finalizar Compra</button>
              </form>";
    } else {
        echo "<p>El carrito está vacío.</p>";
    }
    ?>
    <a href="gzcata.php" class="btn btn-primary mt-3">Volver al catálogo</a>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="orderSuccessModal" tabindex="-1" aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderSuccessModalLabel">Pedido Realizado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¡Tu pedido se ha realizado con éxito!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <?php if ($orderSuccess): ?>
  <script>
    var orderSuccessModal = new bootstrap.Modal(document.getElementById('orderSuccessModal'));
    orderSuccessModal.show();
  </script>
  <?php endif; ?>
</body>
</html>