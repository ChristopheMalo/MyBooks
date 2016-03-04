<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Author;

/**
 * Access to author's data 
 *
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
class AuthorDAO extends DAO {
    
    /**
     * Returns an author matching the param id
     * 
     * @param int $id The author id
     * @return object \MyBooks\Domain\Author The author
     */
    public function find($id)
    {
        $sql = "SELECT * FROM author WHERE auth_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));
        
        // Debug to display data row
        //var_dump($row); -> Returns array -> an author with data from sql select
        
        return $this->buildDomainObject($row);
    }
    
    /**
     * Builds a Author object based on a database row
     * 
     * @param array $row The database row containing author data
     * @return \MyBooks\Domain\Author
     */
    protected function buildDomainObject($row)
    {
        $author = new Author();
        $author->setId($row['auth_id']);
        $author->setFirstname($row['auth_first_name']);
        $author->setLastname($row['auth_last_name']);
        
        return $author;
    }
    
}