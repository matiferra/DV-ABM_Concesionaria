<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include __DIR__ . '/../partials/head.php'?>

    <title>Consecionaria Ferrario</title>
</head>
    <body class="fondoAMB">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php include __DIR__ . '/../../views/partials/alert_Update.php'; ?>
                    <div>
                        <a href="/web+ABM/views/menuABM.php" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-2x"> Vover </span></a>
                    </div>
                </div>
            </div>
            <h1 class="text-center mb-4"><b><u>Alta, Baja y Modificaciones <br> de MARCAS</u></b></h1>
            <div class="row">
                <div class="col-6">
                    <form class="form-inline" action="/web+ABM/admin/seccion/marcas/index.php" method="GET">
                        <input class="form-control" type="search" name="encontrar"  placeholder="Buscar por nombre" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-3"></div>
                <div class="col-3">
                    <a href="/web+ABM/admin/seccion/marcas/index.php?ordenar=ASC&" class="btn btn-success"><span class="fa fa-arrow-down"> </span></a>
                    <label for="ordenar" class="label text-center" style="background-color: grey;">ORDENAR</label>
                    <a href="/web+ABM/admin/seccion/marcas/index.php?ordenar=DESC" class="btn btn-success"><span class="fa fa-arrow-up  "> </span></a>
                </div>
            </div>

            <table class="table table-bordered striped">
                <thead>
                    <tr>
                        <td>Logo</td>
                        <td>Marca</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($marcas as $marca): ?>
                        <tr>
                            <td><img height="50" src="/web+ABM/admin/images/marcas/<?php echo $marca->imagen?>" alt=""></td>
                            <td><b><?php echo $marca->nombre?></b></td>
                            <td>
                                <a href="/web+ABM/admin/seccion/marcas/edit.php?id=<?php echo $marca->id_marca?>" class="btn btn-primary"><span class="fa fa-edit"> </span></a>
                                <a href="/web+ABM/admin/php/controllers/marcas/delete.php?id=<?php echo $marca->id_marca?>" class="btn btn-danger"><span class="fa fa-trash"> </span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <?php (new Paginator($botones, '/web+ABM/admin/seccion/marcas/index.php?'))->numbers()?>
            
                <a href="/web+ABM/admin/seccion/marcas/create.php" class="btn btn-success"><span class="fa fa-plus"> Agregar Marca </span></a>
        </div>
    </body>
</html>
