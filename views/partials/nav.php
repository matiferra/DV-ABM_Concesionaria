<nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-12">
          <p class="nav-text"></p>
          <ul class="right chevron">
          <?php if (!isset($_SESSION['autorizado']) || !$_SESSION['autorizado']){ ?>
              <li><a href="/web+ABM/home.php">Home</a></li>
              <li><a href="/web+ABM/seccion/galeria.php?botonOrdenar=ASC">Galeria</a></li>
              <li><a href="/web+ABM/seccion/login.php">Login</a></li>
              <li>
                <div class="mt-3">
                  <form class="form-inline" action="/web+ABM/seccion/galeria.php" method="GET">
                      <input class="form-control" type="search" name="encontrar"  placeholder="Ingrese marca.." aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Buscar</button>
                  </form>
                </div>
              </li>
          <?php } else { ?>
              <li><a href="/web+ABM/home.php">Home</a></li>
              <li><a href="/web+ABM/seccion/galeria.php?botonOrdenar=ASC">Galeria</a></li>
              <li><a href="/web+ABM/seccion/menu.php">ABM</a></li>
              <li><a href="/web+ABM/php/controllers/logout.php">Cerrar Sesion</a></li>
              <li>
                <div class="mt-3">
                  <form class="form-inline" action="/web+ABM/seccion/galeria.php" method="GET">
                      <input class="form-control" type="search" name="encontrar"  placeholder="Modelos según marcas.." aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Buscar</button>
                  </form>
                </div>
              </li>
          <?php } ?>
          </ul>
        </div>
      </nav>