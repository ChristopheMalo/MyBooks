<?php
/**
 * Frontal controller of the application
 * 
 * @author          Christophe Malo
 * @fileversion     1.0.0
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__ . '/../app/config/dev.php';
require __DIR__ . '/../app/app.php';
require __DIR__ . '/../app/routes.php';

$app->run();