<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include __DIR__ . '/../partials/head.php'?> 
        <title>Edicion de Modelo</title>

    </head>
    <body class="fondoAMB">
        <div class="container">
            <div>
            <a href="/web+ABM/admin/seccion/autos/index.php" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-3x"> </span></a>
        </div> 
            <div class="row">
                <div class="col-md-4">
                    <form method="POST" action="/web+ABM/admin/seccion/autos/update.php" enctype="multipart/form-data"   >
                        <div class="form-group">
                            <label for="nombre">Nombre</label><br>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $elAuto->nombre ?>" >
                        </div>
                        
                        <div class="form-group">
                            <label for="nombre">Color</label><br>
                            <input class="form-control" type="text" id="color" name="color" value="<?php echo $elAuto->color ?>" >
                        </div>
                        
                        <div class="form-group">
                            <label for="anio">Año</label><br>
                            <input class="form-control" type="text" id="anio" name="anio" value="<?php echo $elAuto->anio ?>" >
                        </div>
                        
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <select class="form-control" name="marca">
                            <?php foreach($marcas as $marca):?>
                                <?php $selected = ($marca->id_marca == $elAuto->id_marca) ? "selected": ""; ?>
                                    <option value="<?php echo $marca->id_marca?>" <?php echo $selected ?> > <?php echo $marca->nombre?></option> 
                            <?php endforeach?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="userfile">Agregue una foto</label><br>
                            <input type="file" name="userfile" >
                        </div>
                        
                        <img height="250" src="/web+ABM/images/autos/<?php echo $elAuto->imagen ?>" alt="Imagen Modelo">
                        
                        <input type="hidden" name="id" value="<?php echo $elModelo->id_modelo?>">
                        <input type="hidden" name="imagen" value="<?php echo $elAuto->imagen?>">
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Enviar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>