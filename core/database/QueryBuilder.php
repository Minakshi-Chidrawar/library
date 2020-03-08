<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);        
    }

    public function book($table, $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE id = $id");
        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function getBooksByCategory($table, $category_id)
    {
        $statement = $this->pdo->prepare("select b.id as bookId, b.name as bookName, c.name as categoryName from books b 
                                            inner join book_categories bc 
                                                on b.id = bc.book_id
                                            inner join categories c 
                                                on bc.category_id = c.id
                                        where bc.category_id = $category_id");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}