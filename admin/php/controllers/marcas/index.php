<?php
    require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Marca.php';
    require __DIR__ . '/../../models/Paginator.php';

    $marcas = Marca::all();

    $total = Marca::getAllCount();

    if(isset($_GET["encontrar"])){
        $busqueda = $_GET["encontrar"];
    }

    $botones = ceil($total[0] / 3);
    
    require __DIR__ . '/../../../views/marcas/index.php';