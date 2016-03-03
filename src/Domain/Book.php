<?php

namespace MyBooks\Domain;

/**
 * Class representing a Book
 *
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
class Book {
    
    /**
     * Book id
     * 
     * @var int
     */
    private $id;
    
    /**
     * Book title
     * 
     * @var string
     */
    private $title;
    
    /**
     * Book isbn
     * 
     * @var string
     */
    private $isbn;
    
    /**
     * Book summary
     * 
     * @var string
     */
    private $summary;
    
    /**
     * Associated author (firstname - lastname)
     * 
     * @var \MyBooks\Domain\Author
     */
    private $author;
    
    
    
    // All the Getters
    /**
     * Returns book id
     * 
     * @return int $id The book id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Returns book title
     * 
     * @return string $title The book title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Returns book isbn
     * 
     * @return string The book isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
    
    /**
     * Returns book summary
     * 
     * @return string The book summary
     */
    public function getSummary()
    {
        return $this->summary;
    }
    
    /**
     * Returns book author (firstname - lastname)
     * 
     * @return object \MyBooks\Domain\Author The book author
     */
    public function getAuthor()
    {
        return $this->author;
    }
    
    
    // All the Setters
    /**
     * Sets book id
     * 
     * @param type $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Sets book title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Sets book isbn
     * 
     * @param string $isbn
     * @return void
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
    
    /**
     * Sets book summary
     * 
     * @param string $summary
     * @return void
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }
    
    /**
     * Sets book author (firstname - lastname)
     * 
     * @param \MyBooks\Domain\Author $author
     * @return void
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }
}
