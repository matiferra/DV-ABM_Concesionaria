<?php
session_start();

	require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Auto.php';


 	Auto::delete($_GET["id"]);

	$_SESSION['message'] = [
        'type' => 'success',
        'text' => 'Se ha eliminado el Modelo con exito!'
    ];

	header('location: /web+ABM/admin/seccion/autos/index.php');
