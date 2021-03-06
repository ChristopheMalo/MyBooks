<?php

namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;

/**
 * Data Access Object
 * 
 * 
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
abstract class DAO
{
    
    /**
     * Database connection
     * 
     * @var \Doctrine\DBAL\Connection
     */
    private $db;
    
    /**
     * Constructor
     * 
     * @param object \Doctrine\DBAL\Connection The database connection object
     * @return void
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }
    
    /**
     * Grants access to the database connection object
     * 
     * @return object \Doctrine\DBAL\Connection The database connection object
     */
    protected function getDb()
    {
        return $this->db;
    }
    
    /**
     * Builds a domain object from a database row
     */
    protected abstract function buildDomainObject($row);
}
