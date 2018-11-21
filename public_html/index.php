<?php
require '../vendor/autoload.php';

// instantiate the App object
$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true
    ]
  ]
);


// container

require('../app/container.php');


$app->get('/',\App\Controllers\PagesController::class . ':home');
// Run application
$app->run();
