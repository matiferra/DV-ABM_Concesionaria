<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include __DIR__ . '/../partials/head.php' ?>
    
    <title>Agregar Modelo</title>
</head>
<body class="fondoAMB">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="/web+ABM/admin/seccion/autos/index.php" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-3x"> </span></a>
                </div>
                <form method="POST" action="/web+ABM/admin/php/controllers/autos/store.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Modelo</label><br>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese un nombre" >
                    </div>
                    <div class="form-group">
                        <label for="nombre">Color</label><br>
                        <input type="text" id="color" name="color" placeholder="Ingrese un color" >
                    </div>
                    <div class="form-group">
                        <label for="nombre">Año</label><br>
                        <input type="text" id="anio" name="anio" placeholder="Ingrese un año" >
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <select name="marca">
                    <?php foreach($marcas as $marca):?>
                            <option value="<?php echo $marca->id_marca?>" selected><?php echo $marca->nombre?></option> 
                    <?php endforeach?>
                    </select> <br>
                    <div class="form-group">
                        <label for="userfile">Agregue una foto</label><br>
                        <input type="file" name="userfile" >
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
