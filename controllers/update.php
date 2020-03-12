<?php

$id = $_GET['id'];

if (! ($id > 0 && is_numeric($id))) {
   die("The book does not exist");
}

$book = $database->book('books', $id);

require 'views/update.view.php';