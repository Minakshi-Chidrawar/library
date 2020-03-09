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

    public function update($table, $parameters, $id)
    {
        $sql = "UPDATE $table SET name = :name, 
                                    link = :link, 
                                    content = :content
                 WHERE id = :id";

        try {
            $statement = $this->pdo->prepare($sql);                                  
            $statement->bindParam(':name', $parameters['name'], PDO::PARAM_STR);       
            $statement->bindParam(':link', $parameters['link'], PDO::PARAM_STR);    
            $statement->bindParam(':content', $parameters['content'], PDO::PARAM_STR);   
            $statement->bindParam(':id', $id, PDO::PARAM_INT);   
            $statement->execute();
        } catch (Exception $e) {
            echo "Update failed (for a book {$parameters['name']}): " . $e->getMessage();
        }
    }

    public function deleteRecord($table, $id)
    {
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id = $id");
        $statement->execute();
    }
}