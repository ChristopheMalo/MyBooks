<?php

namespace MyBooks\Domain;

/**
 * Class representing an Author
 *
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
class Author {
    
    /**
     * Author id
     * 
     * @var int
     */
    private $id;
    
    /**
     * Fistname author
     * 
     * @var string
     */
    private $firstname;
    
    /**
     * Lastname author
     * 
     * @var string
     */
    private $lastname;
    
    
    // All the Getters
    /**
     * Returns author id
     * 
     * @return string The author id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Returns author firstname
     * 
     * @return string The author firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Returns author lastname
     * 
     * @return string The author lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    
    
    // All the Setters
    /**
     * Sets author id
     * 
     * @param int $id
     * @return void
     */
    public function setid($id)
    {
        $this->id = $id;
    }
    
    /**
     * Sets author firstname
     * 
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    /**
     * Sets author lastname
     * 
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}
