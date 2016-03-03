<?php
/**
 * Controller management of application routes
 * 
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */

// Homepage
$app->get('/', function() use ($app) {
    $books = $app['dao.book']->findAll();
    return $app['twig']->render('index.html.twig', array('books' => $books));
})->bind('home');

// Detailed book
$app->get('/book/{id}', function ($id) use ($app) {
    $book = $app['dao.book']->find($id);
    $author = $app['dao.author']->find($id);
    
    return $app['twig']->render('book.html.twig', array('book' => $book, 'author' => $author));
})->bind('book');