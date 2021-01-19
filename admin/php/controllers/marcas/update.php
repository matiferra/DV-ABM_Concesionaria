<?php
session_start();

	require __DIR__ . '/../../classes/DB.php';
    require __DIR__ . '/../../models/Model.php';
    require __DIR__ . '/../../models/Marca.php';

    $nombre_archivo= $_FILES['userfile']['name'];
    $marca = new Marca;

    if($nombre_archivo != ''){
        $nombre_archivo= uniqid().'.'.pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
    } else{
        $nombre_archivo = $_POST["imagen"];
    }

    $marca->setAtributo('imagen', $nombre_archivo);
    $marca->setAtributo('nombre', $_POST['nombre']);
    $marca->update($_POST['id']);
    
    
    $tipo_archivo = $_FILES['userfile']['type'];
    $tamano_archivo = $_FILES['userfile']['size'];
    
    $destino = __DIR__ . "/../../../images/marcas/".$nombre_archivo;

    if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 999999999999))) {
        
        if(($_FILES['userfile']['name'] == '') || ($_FILES['userfile']['name'] =! $_POST["imagen"])) {

            $_SESSION['message'] = [
                'type' => 'success',
                'text' => 'Se ha editado la Marca con exito! No ha modificado la imagen'
            ];

        } else {
            
            $_SESSION['message'] = [
                'type' => 'danger',
                'text' => 'La extensión o el tamaño de los archivos no es correcta'
            ];

        }

    }else if (!move_uploaded_file($_FILES['userfile']['tmp_name'],  $destino)){

        $_SESSION['message'] = [
            'type' => 'danger',
            'text' => 'Ocurrió algún error al subir el fichero. No pudo guardarse.'
        ];

    } else {

        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Se ha agregado la Marca con exito!'
        ];
    }



	header('location: /web+ABM/admin/seccion/marcas/index.php');
