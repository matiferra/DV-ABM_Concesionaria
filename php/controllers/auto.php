<?php

    require __DIR__ . '/../../admin/php/classes/DB.php';
    require __DIR__ . '/../../admin/php/models/Model.php';
    require __DIR__ . '/../../admin/php/models/Auto.php';
    require __DIR__ . '/../../admin/php/models/Marca.php';

    $modeloConsulta = Auto::find($_GET["id_modelo"]);
    $marcaNombre = Marca::find($modeloConsulta->id_marca);

    require __DIR__ . '/../../views/auto.php';

