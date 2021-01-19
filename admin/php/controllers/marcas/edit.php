<?php
    require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Marca.php';

    $laMarca = Marca::find($_GET['id']);

    require __DIR__ . '/../../../views/marcas/edit.php'; 