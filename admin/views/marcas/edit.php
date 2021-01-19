<!DOCTYPE html>
<html lang="en">
<head>

    <?php include __DIR__ . '/../partials/head.php'?>

    <title>Edicion de Marca</title>
</head>


<body class="fondoAMB">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="/web+ABM/admin/seccion/marcas/index.php" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-3x"> </span></a>
                </div>
                <form method="POST" action="/web+ABM/admin/php/controllers/marcas/update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre de la Marca</label><br>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $laMarca->nombre ?>" >
                    </div>
                    <img height="200" src="/web+ABM/admin/images/marcas/<?php echo $laMarca->imagen?>" alt="">
                    <div class="form-group">
                        <label for="userfile">Agregue una LOGO</label><br>
                        <input type="file" name="userfile">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $laMarca->id_marca?>">
                    <input type="hidden" name="imagen" value="<?php echo $laMarca->imagen?>">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"> Enviar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>