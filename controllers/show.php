<?php

$id = $_GET['id'];

if (! ($id > 0 && is_numeric($id))) {
   die("Something went wrong");
}

$book = $database->book('books', $id);

require 'views/show.view.php';