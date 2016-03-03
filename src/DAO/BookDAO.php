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
     * Builds a Book object based on a database row
     * 
     * @param array $row The database row containing book data
     * @return \MyBooks\Domain\Book
     */
    protected function buildDomainObject($row)
    {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setSummary($row['book_summary']);
        
        return $book;
    }
}
