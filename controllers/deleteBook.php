<?php

$id = $_GET['id'];

if (! ($id > 0 && is_numeric($id))) {
   die("Something went wrong");
}

$database->deleteRecord('books', $id);

header('Location: /');