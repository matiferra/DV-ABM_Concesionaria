<?php
    require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Marca.php';

    $marcas = Marca::getAll();
    
    require __DIR__ . '/../../../views/autos/create.php';