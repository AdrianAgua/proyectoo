<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/css/footer.css">
    <link rel="stylesheet" href="vistas/css/stilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <script src="https://kit.fontawesome.com/bf4183fe89.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bf4183fe89.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="vistas\imagenes\logo.png" type="image/x-icon">
    <title>Soluciones Integrales</title>
    
</head>
<body>
    <div>
        
            <?php  
              include ('vistas\modulos\menu.php');
            $var2 = new Controlador();
            $var2 -> enlacesPagina();
            ?> 
    </div>
    <?php
  
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<footer>
  <?php 
    include ('vistas\modulos\footer.php');
  ?>
</footer>
</html>