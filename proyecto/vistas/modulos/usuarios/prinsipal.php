<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Cuenta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Carrusel corregido -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="vistas/imagenes/sillas.PNG" class="d-block w-100" width="600" height="300" alt="Silla 1">
    </div>
    <div class="carousel-item">
      <img src="vistas/imagenes/BR-San-Valentin-Banner-Principal-Sillas.webp" width="600" height="300" class="d-block w-100" alt="Silla 2">
    </div>
    <div class="carousel-item">
      <img src="vistas/imagenes/imagen3.jpg" class="d-block w-100" width="600" height="300" alt="Silla 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item completed"><a href="index.php?accion=principal" class="text-white text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item active">Clientes</li>
            </ul>
        </nav>
    </div>

<!-- Tarjeta de ejemplo -->
  <div class="container mt-4">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-center">      
        <div class="col d-flex justify-content-center">
            <a href="#" class="card-link">
                <div class="card h-100 shadow rounded-3">
                    <img src="vistas/imagenes/.webp" class="card-img-top img-fluid" alt="Producto 1" style="height: 250px; object-fit: cover; width: 100%; padding: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <hr>
                        <p class="card-text">Descripción breve del producto con detalles clave.</p>
                    </div>
                </div>
            </a>
        </div>
      </div>
  </div>
</body>
</html>
