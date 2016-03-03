<?php
/**
 * Configuration file for the development phase
 * 
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
// Include the production configuration
require __DIR__ . '/prod.php';

// Enable the debug mode
$app['debug'] = true;