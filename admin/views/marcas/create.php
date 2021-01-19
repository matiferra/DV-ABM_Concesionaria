<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include __DIR__ . '/../partials/head.php'?>

    <title>Agregar Marca</title>
</head>
<body class="fondoAMB">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="/web+ABM/admin/seccion/marcas/index.php" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-3x"> </span></a>
                </div>
                <form method="POST" action="/web+ABM/admin/php/controllers/marcas/store.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Marca</label><br>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese la nueva marca" >
                    </div>
                    <div class="form-group">
                        <label for="userfile">Agregue una LOGO</label><br>
                        <input type="file" name="userfile" >
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>