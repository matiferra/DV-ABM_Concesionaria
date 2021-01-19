<?php
    require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Auto.php';
    require __DIR__ . '/../../models/Marca.php';

    $elAuto = Auto::find($_GET['id']); 
    $marcas = Marca::getAll();

   // var_dump($marcas);
   // exit;

    require __DIR__ . '/../../../views/autos/edit.php'; 