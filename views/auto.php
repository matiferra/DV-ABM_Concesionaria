<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    
    <?php require __DIR__ . '/partials/head.php'; ?>
    
    <title>Concesionaria Ferrario</title>
  
  </head>
  
  <body class="size-1140">
   <!-- HEADER -->
    <header role="banner" class=" position-absolute">    
      <!-- Top Navigation -->
      <?php require __DIR__ . '/partials/nav.php'; ?>
      
    </header>
  
  <main role="main">    
      <!-- Main Header -->
    <header class="fondo">
      <div class="caja background-dark text-center">
          <div class="item">
            <div class="s-12">
              <div class="titulo"><h1 class="text-size-50 text-m-size-30">Modelo de nuestra colección</h1></div>
              <img src="/web+ABM/images/fondoGaleria.jpg" alt="">
            </div>
        </div>              
      </div>               
    </header>
  </main>
    <div class="fondo">
        <div class="container">
            <a href="/web+ABM/seccion/galeria.php?botonOrdenar=ASC" class="btn"><span class="fa fa-arrow-left  fa-6x fa-lg">  </span> </a>
        </div>
    </div>
    <div class="fondo row justify-content-md-center ">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="/web+ABM/admin/images/autos/<?php echo $modeloConsulta->imagen ?>" alt="Card image cap">
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
    
     <?php require __DIR__ . '/partials/scripts.php'; ?>

  </body>
</html>