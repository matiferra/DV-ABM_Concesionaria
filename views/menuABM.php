<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
  <?php require __DIR__ . '/../views/partials/head.php'; ?>
  
    <title>Eleganter - New Amazing HTML5 Template</title>
  </head>
  
  <body class="size-1140">
  	<!-- HEADER -->
    
    <header role="banner" class=" position-absolute">    
      <!-- Top Navigation -->
    <?php require __DIR__ . '/../views/partials/nav.php'; ?>
      
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="../images/fondo.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Bienvenido<br> a Altas, Bajas y Modificaciones</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-20">Elija el sitio.</p></div>
                      <div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="/web+ABM/admin/seccion/marcas/index.php?pagina=1">ABM Marcas</a>
                      </div>       
                      <div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="/web+ABM/admin/seccion/autos/index.php?pagina=1">ABM Modelos</a>
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      