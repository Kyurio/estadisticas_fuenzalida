<?php
include_once 'app/router/ViewLoader.php';
include_once 'app/utils/helpers.php';

$viewLoader = new ViewLoader();

# Obtener la ruta desde la URL
$request = $_SERVER['REQUEST_URI'];
$valor = @array_pop(array_filter(explode('/', '.' . $request)));

# Si no hay ningún valor después del nombre del proyecto, asumir la ruta raíz
if (empty($valor)) {
    $valor = '/';
}

#  invoca el header 
require 'templates/header.php';

# Enrutamiento simple
switch ($valor) {

    case 'fuenzalisa_wsp':

        $viewLoader->load('home');
        break;

    case 'home':

        $viewLoader->load('home');
        break;

    case 'admin':

        $viewLoader->load('admin');
        break;

    default:

        $viewLoader->load('error');
        break;
}


#  invoca el footer 
require 'templates/footer.php';