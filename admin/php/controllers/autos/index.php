
<?php
    require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Auto.php';
    require __DIR__ . '/../../models/Paginator.php';

    $modelos = Auto::all();
    
    $total = Auto::getAllCount();

    if(isset($_GET["encontrar"])){
        $busqueda = $_GET["encontrar"];
    }

    $botones = ceil($total[0] / 3);

    require __DIR__ . '/../../../views/autos/index.php';

