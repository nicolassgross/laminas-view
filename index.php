<?php

include_once "vendor/autoload.php";

use Laminas\View\Renderer\PhpRenderer;
use Laminas\View\Resolver\TemplateMapResolver;

//renderiando layout
$view = new PhpRenderer();
$view->setResolver(new TemplateMapResolver([
    'layout' => __DIR__ . '/view/layout.phtml',
    'example' => __DIR__ . '/view/example.phtml',
]));

$view->setTemplate('layout');

echo $view->render('layout');