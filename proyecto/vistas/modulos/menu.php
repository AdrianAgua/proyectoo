<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Punto de Ventas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?accion=principal">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?accion=admin">Ventas</a>
        </li>

        <!-- Categorías - Menú Desplegable -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?accion=sillas">Sillas Gamer</a></li>
            <li><a class="dropdown-item" href="index.php?accion=monitores">Monitores</a></li>
            <li><a class="dropdown-item" href="index.php?accion=equi_comp">Equipos de Cómputo</a></li>
            <li><a class="dropdown-item" href="index.php?accion=accesorios">Accesorios</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php?accion=otros">Otros</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Comentarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?accion=alta_prod">Alta Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?accion=alta_pers">Alta Personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?accion=usuario">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?accion=login">Iniciar sesión</a>
        </li>
      </ul>

      <!-- Barra de Búsqueda -->
      <form class="d-flex" action="index.php?accion=buscar" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search" name="q">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="modalTitulo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">
      
      <!-- Encabezado -->
      <div class="modal-header custom-header">
        <h5 class="modal-title mx-auto"> Comentario</h5>
        <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <!-- Cuerpo -->
      <div class="modal-body text-center">
        <textarea class="form-control" id="comentarios" name="comentarios"></textarea>
      </div>

      <!-- Pie con botones -->
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn custom-btn" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn custom-btn-outline">Enviar</button>
      </div>
      
    </div>
  </div>
</div>
