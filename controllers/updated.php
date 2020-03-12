<?php

$id = $_GET['id'];

if (! ($id > 0 && is_numeric($id))) {
   die("Something went wrong while updating the book");
}

$database->update('books', [
    'name' => $_POST['name'],
    'link' => $_POST['link'],
    'content' => $_POST['content'],
], $id);

header('Location: /');