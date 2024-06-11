<?php
include_once 'app/router/ViewLoader.php';
include_once 'app/utils/helpers.php';

$viewLoader = new ViewLoader();

$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?');
$exploded_request = explode('/', trim($request, '/'));
$projectName = array_shift($exploded_request);
$internalPath = implode('/', $exploded_request);


if (empty($internalPath)) {
    $internalPath = 'home';
}

# Invoca el header 
require 'templates/header.php';
require 'components/complements/preloader.php';

# Enrutamiento simple
switch ($internalPath) {
    case '':
        $viewLoader->load('home');
        break;

    case 'home':
        $viewLoader->load('home');
        break;

    default:
        $viewLoader->load('error');
        break;
}

# Invoca el footer 
require 'templates/footer.php';
