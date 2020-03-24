<?php

$id = $_GET['id'];

if (! ($id > 0 && is_numeric($id))) {
   die("Something went wrong");
}

echo(json_encode($database->book('books', $id)));