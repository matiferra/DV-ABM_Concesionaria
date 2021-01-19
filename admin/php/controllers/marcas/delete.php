<?php
session_start();

	require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Marca.php';

 	
    $confirmacion = Marca::delete($_GET["id"]);

    if($confirmacion!=0){
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Se ha eliminado la Marca con exito!'
        ];
    }else{
        $_SESSION['message'] = [
            'type' => 'danger',
            'text' => 'La Marca posee Modelos de autos cargados, eliminelos primero.'
        ];

    }
	header('location: /web+ABM/admin/seccion/marcas/index.php');
