<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Concesionaria Ferrario</title>


    <link rel="stylesheet" href="/finalPHP/vendor/css/gallery.css">
    <link rel="stylesheet" href="/finalPHP/vendor/css/misEstilos.css">
    <link rel="stylesheet" href="/finalPHP/vendor/css/components.css">
    <link rel="stylesheet" href="/finalPHP/vendor/css/icons.css">
    <link rel="stylesheet" href="/finalPHP/vendor/css/responsee.css">
    <link rel="stylesheet" href="/finalPHP/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/finalPHP/vendor/owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="/finalPHP/vendor/css/template-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="/finalPHP/vendor/js/jquery-ui.min.js"></script>      
    <script type="text/javascript" src="/finalPHP/vendor/gallery.js"></script>
  </head>
  
  <body class="size-1140">
   <!-- HEADER -->
    <header role="banner" class=" position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
          <?php if (!isset($_SESSION['autorizado']) || !$_SESSION['autorizado']){ ?>
              <li><a href="/finalPHP/home.php">Home</a></li>
              <li><a href="/finalPHP/php/controladores/navegacion.controller.php">Galeria</a></li>
              <li><a href="/finalPHP/cuerpo/acceder.php">Login</a></li>
          <?php } else { ?>
              <li><a href="/finalPHP/home.php">Home</a></li>
              <li><a href="/finalPHP/php/controladores/navegacion.controller.php">Galeria</a></li>
              <li><a href="/finalPHP/cuerpo/indexABM.php">ABM</a></li>
              <li><a href="/finalPHP/cuerpo/cerrarSesion.php">Cerrar Sesion</a></li>
          <?php } ?>
          </ul>
        </div>
      </nav>
    </header>
  <main role="main">    
      <!-- Main Header -->
    <header class="fondo">
      <div class="caja background-dark text-center">
          <div class="item">
            <div class="s-12">
              <div class="titulo"><h1 class="text-size-50 text-m-size-30">Modelo de nuestra colección</h1></div>
              <img src="/finalPHP/imagenes/fondoGaleria.jpg" alt="">
            </div>
        </div>              
      </div>               
    </header>
  </main>
    <div class="fondo">
        <div class="container">
            <a href="/finalPHP/php/controladores/navegacion.controller.php?id=<?php echo $modeloConsulta->id_modelo?>" class="btn"><span class="fa fa-arrow-left  fa-6x fa-lg">  </span> </a>
        </div>
    </div>
    <div class="fondo row justify-content-md-center ">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="/finalPHP/imagenes/modelos/<?php echo $modeloConsulta->imagen ?>" alt="Card image cap">
            <div class="fondo card-body">
                <h2 class="text-center"><?php echo $marcaNombre->nombre?></h2>
                <h3 class="card-title text-center"><?php echo $modeloConsulta->nombre ?></h3>
            <div class=" card-body">
                <h5 class="mb-0 pb-0"><u>Caracteristicas</u></h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Color</b>: <?php echo $modeloConsulta->color ?></li>
                <li class="list-group-item"><b>Año</b>: <?php echo $modeloConsulta->anio ?></li>
            </ul>
        </div>
    </div>
    
    <script type="text/javascript" src="/finalPHP/vendor/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="/finalPHP/vendor/js/template-scripts.js"></script>
  </body>
</html>