<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

/**
 * Configuration file of Silex Application
 * 
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();


// Register service providers
// Register the service provider associated with Doctrine DBA
$app->register(new Silex\Provider\DoctrineServiceProvider());

// Register Twig to the path of the templates folder
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

// Register the service provider associated with twig-bridge component
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());



// Register services
// Book
$app['dao.book'] = $app->share(function ($app)
{
    return new MyBooks\DAO\BookDAO($app['db']);
});

// Author
$app['dao.author'] = $app->share(function ($app)
{
    return new MyBooks\DAO\AuthorDAO($app['db']);
});