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
              <div class="titulo"><h1 class="text-size-50 text-m-size-30">Esta es nuestra colección</h1></div>
              <img src="/web+ABM/images/fondoGaleria.jpg" alt="">
            </div>
        </div>              
      </div>               
    </header>
  </main>

        
    <section class=" fondo full-width" id="galeria">
      <div class='text-center'>
        <div class=" background-primary-hightlight">
          <button type="button" class="btn btn-outline-black waves-effect filter" >
            <a class="tab-label active-btn" href="/web+ABM/seccion/galeria.php?todos">TODOS</a>
          </button>
        </div>
      </div>
      
      <div class="tabs background-primary-hightlight">
        <div class="row">  
          <div class="col-md-12 d-flex justify-content-center mb-2">
              <div class="fondo">
                <div class="tab-item tab-active ">
              </div>
            <hr>
              <?php foreach ($marcas as $marca): ?>
                <button type="button" class=" btn btn-outline-black waves-effect filter">
                <a class="tab-label " href="/web+ABM/seccion/galeria.php?id_marca=<?php echo $marca->id_marca?>"><?php echo $marca->nombre?></a>
                </button>
              <?php endforeach; ?>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class='text-right mr-5 pr-5'>
        <?php if(isset($_GET["encontrar"]) || isset($_GET["id_marca"])):?>
        <?php else : ?>
            <a href="/web+ABM/seccion/galeria.php<?php 
            if(isset($_GET["botonOrdenar"])){
              if($_GET["botonOrdenar"] == 'ASC') { echo '?botonOrdenar=DESC';} 
              else {echo '?botonOrdenar=ASC';}
            } else {
              echo '?botonOrdenar=DESC';
            }  
            ?>" 
            class="btn "  style="background-color: #f7ff42;">
            <span class="fa 
            <?php 
            if(isset($_GET["botonOrdenar"])){
              if($_GET["botonOrdenar"] == 'ASC') {echo 'fa-arrow-down';  } 
              else {echo 'fa-arrow-up';}
            } else {
              echo 'fa-arrow-up';
            }
            ?>"> </span></a>
            <label for="ordenar" class="mb-5 p text-center" style="background-color: yellow;">ORDENAR por Modelo</label>
        <?php endif;  ?>
      </div>
      <div class="line">
        <div class="margin">
          <div class="row">
            <?php if(isset($modelos) && $modelos != null): ?>
            <?php foreach ($modelos as $modelo): ?>
              <div class="s-12 m-6 l-4">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <?php foreach($marcas as $marca): ?>
                        <?php if($modelo->id_marca == $marca->id_marca): ?>
                          <h1><?php echo $marca->nombre?></h1>
                        <?php endif;?>
                      <?php endforeach;?> 
                        <h2><?php echo $modelo->nombre?></h2>
                      <h5>Modelo del Año <?php echo $modelo->anio?></h5>
                      <br> 
                      <a href="/web+ABM/seccion/show.php?id_modelo=<?php echo $modelo->id_modelo?>">Ver mas detalles</a>    
                    </div> 
                  </div> 
                  <img class="img-fluid" src="../admin/images/autos/<?php echo $modelo->imagen ?>" alt="Card image cap">
                </div>	
              </div>
            <?php endforeach; ?>
            <?php else: 
              if(isset($_GET["encontrar"]) && $marcas == null)   :?>
                <h4>No se han encontrado Marcas</h4>
              <?php else: ?>
                <h4>En este momento no contamos con modelos para esta Marca</h4>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
       </div>
      </div>
    </section>

     <?php require __DIR__ . '/partials/scripts.php'; ?>
  
  </body>
</html>