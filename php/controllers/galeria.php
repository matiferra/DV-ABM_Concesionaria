<?php
    
    require __DIR__ . '/../classes/DB.php';
    require __DIR__ . '/../models/Model.php';
    require __DIR__ . '/../models/Auto.php';
    require __DIR__ . '/../models/Marca.php';

    $marcas = Marca::all();

    if(isset($_GET["encontrar"]) && $_GET["encontrar"] != null){
       if($marcas!=null){
        $modelos = array();
        foreach ($marcas as $marca) {
            $autos = Auto::search($marca->id_marca);
            foreach ($autos as $auto){
                array_push($modelos, $auto);
                }
            }
       }
    }else {
        $modelos = Auto::all(); 
    }    
    
    require __DIR__ . '/../../views/galeria.php';