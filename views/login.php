<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
     
    <?php require __DIR__ . '/partials/head.php'; ?>

    <title>Login</title>
    
    <style>
        body::before {
            content: "";
            top: 0; left: 0;
            width: 100%; height: 100%;
            filter: blur(2px) grayscale(60%);
        }
    </style>
</head>

<body class="fondoLogin">
    <div class="container">
        <a href="/web+ABM/home.php" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-3x">Volver </span></a>
        <div class="row justify-content-center">
            <div class="col col-md-6 mb-5">
                <div class="text-center ">
                    <img height="250" src="/web+ABM/images/logo.png" alt="Concesionaria Ferrario">
                    <h4>Concesionaria Ferrario</h4>
                </div>
                <div class="card my-3">
                    <h3 class="card-header">Iniciar sesion</h3>
                    <div class="card-body">
                        <?php include 'partials/alert_Login.php'; ?>
                        <form method="POST" action="/web+ABM/php/controllers/login.php">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="text-white bg-dark form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="contrasenia">Contraseña</label>
                                <input type="password" class="text-white bg-dark form-control" id="contrasenia" name="contrasenia">
                            </div>
                            <p class="text-right">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>