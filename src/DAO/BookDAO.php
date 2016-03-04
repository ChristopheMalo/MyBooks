<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Book;

/**
 * Access to a data book
 *
 * @author      Christophe Malo
 * @version     1.0.0
 * @copyright   OpenClassrooms - Baptiste Pesquet
 */
class BookDAO extends DAO {
    
    /**
     * The author associated with the book
     * 
     * @var \MyBooks\DAO\AuthorDAO 
     */
    private $authorDAO;
    
    /**
     * Sets the author associated with the book
     * 
     * @param \MyBooks\DAO\AuthorDAO $authorDAO
     */
    public function setAuthorDAO(AuthorDAO $authorDAO)
    {
        $this->authorDAO = $authorDAO;
    }
    
    /**
     * Returns a book matching the id
     * 
     * @param type $id The book id
     * @return object \MyBooks\Domain\Book The book
     * @throws \MyBooks\Domain\Book\Exception if no matching author is found
     */
    public function find($id)
    {
        $sql = "SELECT * FROM book WHERE book_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));
        
        // Debug to display data row
        // var_dump($row); // Return array -> A book with data from sql select
        
        if ($row)
        {
            return $this->buildDomainObject($row);
        }
        else
        {
            throw new \Exception("No corresponding book for this id " . $id);
        }
    }
    
    /**
     * Returns a list of all books, sorted by date (most recent first)
     * 
     * @return array $books A list of all books
     */
    public function findAll()
    {
        $sql = "SELECT * FROM book ORDER BY book_id DESC";
        $result = $this->getDb()->fetchAll($sql);
        
        $books = array();
        foreach ($result as $row)
        {
            $bookId = $row['book_id'];
            $books[$bookId] = $this->buildDomainObject($row);
        }
        
        return $books;
    }
    
    /**
     * Builds a Book object based on a database row with Author (Firstname / Lastname)
     * 
     * @param array $row The database row containing book data
     * @return \MyBooks\Domain\Book
     */
    protected function buildDomainObject($row)
    {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setIsbn($row['book_isbn']);
        $book->setSummary($row['book_summary']);
        
        if (array_key_exists('auth_id', $row))
        {
            $authorId = $row['auth_id'];
            $author = $this->authorDAO->find($authorId);
            $book->setAuthor($author);
        }
        
        // Debug to dispaly a book object
        //var_dump($book); // Returns a book object
        
        return $book;
    }
}
