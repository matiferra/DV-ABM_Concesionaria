<?php
session_start();

require __DIR__ . '/../classes/DB.php';
require __DIR__ . '/../models/Model.php';
require __DIR__ . '/../models/Usuario.php';


$usuario = Usuario::find($_POST['nombre']);

if ($usuario  && $usuario->contrasenia == $_POST['contrasenia']) {
    $_SESSION['autorizado'] = true;
    $_SESSION['id'] = $usuario->id_usuario;
    header('location: /web+ABM/views/menuABM.php');
} else {
    $_SESSION['alert'] = [
        'type' => 'danger',
        'text' => 'El usuario o la contraseña son incorrectos'
    ];
    header('location:  /web+ABM/views/login.php');
}
