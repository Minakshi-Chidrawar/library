<?php

$database = require 'core/bootstrap.php';

$id = $_GET['category_id'];

if (! ($id > 0 && is_numeric($id))) {
   die("Something went wrong");
}

$books = $database->getBooksByCategory('books', $id);

require 'views/booksByCategory.view.php';