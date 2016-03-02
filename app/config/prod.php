<?php
/**
 * Connection configuration file to the DB via Doctrine DBAL
 * 
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
$app['db.options'] = array(
    'driver'    => 'pdo_mysql',
    'charset'   => 'utf8',
    'host'      => 'localhost',
    'port'      => '3306',
    'dbname'    => 'mybooks',
    'user'      => 'mybooks_user',
    'password'  => 'secret',
);